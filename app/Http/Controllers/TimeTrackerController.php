<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Workspace;
use App\Models\TimeTracker;
use Illuminate\Http\Request;
use App\Services\DeletionService;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TimeTrackerController extends Controller
{
    protected $workspace;
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // fetch session and use it in entire class with constructor
            $this->workspace = Workspace::find(session()->get('workspace_id'));
            $this->user = getAuthenticatedUser();
            return $next($request);
        });
    }
    public function index()
    {
        $timesheet = isAdminOrHasAllDataAccess() ? $this->workspace->timesheets : $this->user->timesheets;
        $users = $this->workspace->users;
        return view('time_trackers.timesheet', compact('timesheet', 'users'));
    }


    public function store(Request $request)
    {

        $formFields['workspace_id'] = $this->workspace->id;
        $formFields['user_id'] =  $this->user->id;
        $formFields['start_date_time'] =  date('Y-m-d H:i:s');
        if ($request->has('message') && !empty($request->input('message'))) {
            $formFields['message'] = $request->input('message');
        }
        if ($request->has('project_id') && !empty($request->input('project_id'))) {
            $formFields['project_id'] = $request->input('project_id');
        }
        if ($request->has('task_id') && !empty($request->input('task_id'))) {
            $formFields['task_id'] = $request->input('task_id');
        }
        $new_record = TimeTracker::create($formFields);
        $recorded_id = $new_record->id;
        return response()->json(['error' => false, 'message' => 'Timer has been started successfully.', 'id' => $recorded_id, 'activity_message' => $this->user->first_name . ' ' . $this->user->last_name . ' started time tracker ' . format_date($formFields['start_date_time'],  'H:i:s'), 'type' => 'time_tracker', 'operation' => 'started']);
    }

    public function update(Request $request)
    {
        try {
            $formFields['end_date_time'] =  date('Y-m-d H:i:s');
            if ($request->has('message') && !empty($request->input('message'))) {
                $formFields['message'] = $request->input('message');
            }
            if ($request->has('project_id') && !empty($request->input('project_id'))) {
                $formFields['project_id'] = $request->input('project_id');
            }
            if ($request->has('task_id') && !empty($request->input('task_id'))) {
                $formFields['task_id'] = $request->input('task_id');
            }
            $time_tracker = TimeTracker::findOrFail($request->input('record_id'));
            $time_tracker->update($formFields);
            return response()->json(['error' => false, 'message' => 'Timer has been stopped successfully.', 'id' => $request->input('record_id'), 'activity_message' => $this->user->first_name . ' ' . $this->user->last_name . ' stopped time tracker ' . format_date($formFields['end_date_time'],  'H:i:s'), 'type' => 'time_tracker', 'operation' => 'stopped']);
        } catch (Exception $e) {
            dd($e);
        }
    }


    public function list()
    {
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";
        $user_id = (request('user_id')) ? request('user_id') : "";
        $start_date_from = (request('start_date_from')) ? request('start_date_from') : "";
        $start_date_to = (request('start_date_to')) ? request('start_date_to') : "";
        $end_date_from = (request('end_date_from')) ? request('end_date_from') : "";
        $end_date_to = (request('end_date_to')) ? request('end_date_to') : "";

        $timesheet = TimeTracker::select(
            'time_trackers.*',
            'users.photo as user_photo',
            DB::raw('CONCAT(users.first_name, " ", users.last_name) AS user_name')
        )
            ->leftJoin('users', 'time_trackers.user_id', '=', 'users.id');

        $timesheet  = $timesheet->where('workspace_id', $this->workspace->id);

        if (!isAdminOrHasAllDataAccess()) {
            $timesheet  = $timesheet->where('user_id', $this->user->id);
        }
        if ($start_date_from && $start_date_to) {
            $start_date_from = $start_date_from . ' 00:00:00';
            $start_date_to = $start_date_to . ' 23:59:59';
            $timesheet = $timesheet->whereBetween('start_date_time', [$start_date_from, $start_date_to]);
        }
        if ($end_date_from && $end_date_to) {
            $end_date_from = $end_date_from . ' 00:00:00';
            $end_date_to = $end_date_to . ' 23:59:59';
            $timesheet  = $timesheet->whereBetween('end_date_time', [$end_date_from, $end_date_to]);
        }
        if ($user_id) {
            $timesheet  = $timesheet->where('user_id', $user_id);
        }
        if ($search) {
            $timesheet = $timesheet->where(function ($query) use ($search) {
                $query->where('message', 'like', '%' . $search . '%');
            });
        }

        $total = $timesheet->count();

        $timesheet = $timesheet->orderBy($sort, $order)
            ->paginate(request("limit"))
            ->through(function ($timesheet) {
                $formattedDuration = '-';
                if ($timesheet->end_date_time) {
                    $startDateTime = Carbon::parse($timesheet->start_date_time);
                    $endDateTime = Carbon::parse($timesheet->end_date_time);

                    // Calculate the difference between start and end date times
                    $duration = $endDateTime->diff($startDateTime);

                    // Check if the duration spans multiple days
                    if ($duration->days > 0) {
                        // Format with days if the duration spans multiple days
                        $formattedDuration = $duration->format('%D days %H:%I:%S');
                    } else {
                        // Format as usual without days if the duration is within the same day
                        $formattedDuration = $duration->format('%H:%I:%S');
                    }
                }
                return [
                    'id' => $timesheet->id,
                    'user_name' => $timesheet->user_name,
                    'photo' => "<div class='avatar avatar-md pull-up' title='" . $timesheet->user_name . "'>
                    <a href='" . route('users.show', [$timesheet->user_id]) . "' target='_blank'>
                    <img src='" . ($timesheet->user_photo ? asset('storage/' . $timesheet->user_photo) : asset('storage/photos/no-image.jpg')) . "' alt='Avatar' class='rounded-circle'>
                    </a>
                    </div>",
                    'start_date_time' => format_date($timesheet->start_date_time,  'H:i:s'),
                    'end_date_time' => $timesheet->end_date_time ? format_date($timesheet->end_date_time,  'H:i:s') : '-',
                    'duration' => $formattedDuration,
                    'message' => $timesheet->message,
                    'created_at' => format_date($timesheet->created_at),
                    'updated_at' => format_date($timesheet->updated_at),
                    'project' => $timesheet->project
                        ? "<a href='" . route('projects.info', ['id' => $timesheet->project->id]) . "' target='_blank'>" . $timesheet->project->title . "</a>"
                        : '-',
                    'task' => $timesheet->task
                    ? "<a href='" . route('tasks.info', ['id' => $timesheet->task->id]) . "' target='_blank'>" . $timesheet->task->title . "</a>"
                    : '-',
                ];
            });


        return response()->json([
            "rows" => $timesheet->items(),
            "total" => $total,
        ]);
    }

    public function getTasks(Request $request)
    {
        try {
            $projectId = $request->input('project_id');

            $tasks = Task::where('project_id', $projectId)->get(['id', 'title']);

            return response()->json([
                'error' => false,
                'tasks' => $tasks
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Failed to fetch tasks: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {

        DeletionService::delete(TimeTracker::class, $id, 'Record');
        return response()->json(['error' => false, 'message' => 'Record deleted successfully.', 'id' => $id, 'activity_message' => $this->user->first_name . ' ' . $this->user->last_name . ' deleted time tracker record', 'type' => 'time_tracker']);
    }

    public function destroy_multiple(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'ids' => 'required|array', // Ensure 'ids' is present and an array
            'ids.*' => 'integer|exists:time_trackers,id' // Ensure each ID in 'ids' is an integer and exists in the table
        ]);

        $ids = $validatedData['ids'];
        $deletedIds = [];
        // Perform deletion using validated IDs
        foreach ($ids as $id) {
            $deletedIds[] = $id;
            DeletionService::delete(TimeTracker::class, $id, 'Record');
        }

        return response()->json(['error' => false, 'message' => 'Record(s) deleted successfully.', 'id' => $deletedIds, 'activity_message' => $this->user->first_name . ' ' . $this->user->last_name . ' deleted time tracker record', 'type' => 'time_tracker']);
    }

    public function search_projects(Request $request)
    {
        dd(($request->all()));
        $query = $request->input('q');
        $page = $request->input('page', 1);
        $perPage = 10;
        $projects = $this->workspace->projects();
        // If there is no query, return the first set of projects

        $projects = $projects->when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', '%' . $query . '%');
        })
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get(['id', 'title']);
        // Prepare response for Select2
        $results = $projects->map(function ($project) {
            return ['id' => $project->id, 'text' => ucwords($project->title)];
        });
        // Flag for more results
        $pagination = ['more' => $projects->count() === $perPage];
        return response()->json([
            'items' => $results,
            'pagination' => $pagination
        ]);
    }

    public function search_tasks(Request $request)
    {
        $query = $request->input('q'); // Search term
        $projectId = $request->input('project_id'); // Get project ID from query
        $page = $request->input('page', 1);
        $perPage = 10;

        // Fetch tasks that belong to the given project ID
        $tasks = Task::where('project_id', $projectId)
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'like', '%' . $query . '%');
            })
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get(['id', 'title']);

        // Prepare response for Select2
        $results = $tasks->map(function ($task) {
            return ['id' => $task->id, 'text' => ucwords($task->title)];
        });

        // Return response
        return response()->json([
            'items' => $results,
            'pagination' => ['more' => $tasks->count() === $perPage]
        ]);
    }
}
