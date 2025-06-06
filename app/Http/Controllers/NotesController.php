<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Workspace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\DeletionService;
use Illuminate\Validation\ValidationException;

class NotesController extends Controller
{
  protected $workspace;
protected $user;

public function __construct()
{
    $this->middleware(function ($request, $next) {
        // Prefer workspace_id from header, fallback to session
        $workspaceId = $request->header('workspace-id') ?? session()->get('workspace_id');
        $this->workspace = Workspace::find($workspaceId);
        $this->user = getAuthenticatedUser();
        return $next($request);
    });
}


    public function index()
    {
        $notes = $this->user->notes();
        return view('notes.list', ['notes' => $notes]);
    }


    /**
 * Create a new note.
 *
 * This endpoint allows you to create a new note of type `text` or `drawing`. If the note type is `drawing`,
 * you must provide valid `drawing_data` in base64-encoded SVG format. The note is associated with the current
 * workspace and the authenticated user (either client or user).
 *
 * @group note Managemant
 *
 * @bodyParam note_type string required The type of note. Must be either `text` or `drawing`. Example: text
 * @bodyParam title string required The title of the note. Example: Project Kickoff Notes
 * @bodyParam color string required Color code or name for the note. Example: #ffcc00
 * @bodyParam description string The description or body content of the note (required for text notes). Example: Discussed project milestones and timelines.
 * @bodyParam drawing_data string The base64-encoded SVG content (required if note_type is `drawing`). Example: PHN2ZyB...
 *
 * @response 200 {
 *   "error": false,
 *   "message": "Note created successfully.",
 *   "data": {
 *     "id": 12,
 *     "data": {
 *       "id": 12,
 *       "title": "Project Kickoff Notes",
 *       "note_type": "text",
 *       "color": "#ffcc00",
 *       "description": "Discussed project milestones and timelines.",
 *       "creator_id": "u_1",
 *       "workspace_id": 3,
 *       ...
 *     }
 *   }
 * }
 *
 * @response 422 {
 *   "error": true,
 *   "message": "The given data was invalid.",
 *   "errors": {
 *     "note_type": ["The note type field is required."],
 *     "title": ["The title field is required."]
 *   }
 * }
 *
 * @response 500 {
 *   "error": true,
 *   "message": "An error occurred while creating the note.",
 *   "data": {
 *     "error": "Exception message here"
 *   }
 * }
 */
    public function store(Request $request)
{
    $isApi = $request->get('isApi', false);
    $adminId = getAdminIdByUserRole();

    try {
        $formFields = $request->validate([
            'note_type' => ['required', 'in:text,drawing'],
            'title' => ['required'],
            'color' => ['required'],
            'description' => ['nullable'],
            'drawing_data' => ['nullable', 'string', 'required_if:note_type,drawing']
        ]);

        $drawingData = $request->input('drawing_data');
        $decodedSvg = $drawingData ? base64_decode($drawingData) : null;

        $formFields['drawing_data'] = $decodedSvg;
        $formFields['workspace_id'] = $this->workspace->id;
        $formFields['admin_id'] = $adminId;
        $formFields['creator_id'] = isClient() ? 'c_' . $this->user->id : 'u_' . $this->user->id;

        $note = Note::create($formFields);

        if (!$note) {
            return formatApiResponse(true, 'Note could not be created.', [], 500);
        }

        Session::flash('message', 'Note created successfully.');

        return formatApiResponse(false, 'Note created successfully.', [
            'id' => $note->id,
            'data' => formatNote($note),
        ]);
    } catch (ValidationException $e) {
        return formatApiValidationError($isApi, $e->errors());
    } catch (\Exception $e) {
        return formatApiResponse(true, 'An error occurred while creating the note.', ['error' => $e->getMessage()], 500);
    }
}

/**
 * Update an existing note.
 *
 * Updates the note identified by `id` with the provided data.
 * Supports notes of type `text` or `drawing`. For `drawing` type,
 * the `drawing_data` must be a base64-encoded string, which will be decoded.
 *
 * @group note Managemant
 *
 * @bodyParam id integer required The ID of the note to update. Example: 12
 * @bodyParam note_type string required The type of note, either `text` or `drawing`. Example: text
 * @bodyParam title string required The title of the note. Example: Meeting notes
 * @bodyParam color string required The color associated with the note. Example: #FF5733
 * @bodyParam description string nullable Optional description for the note. Example: Detailed notes from the meeting
 * @bodyParam drawing_data string required_if:note_type,drawing Base64-encoded SVG data for drawing notes.
 *
 * @response 200 {
 *    "error": false,
 *    "message": "Note updated successfully.",
 *    "data": {
 *       "id": 12,
 *       "data": {
 *          "id": 12,
 *          "note_type": "text",
 *          "title": "Meeting notes",
 *          "color": "#FF5733",
 *          "description": "Detailed notes from the meeting",
 *          "drawing_data": null,
 *          // ... other formatted note fields
 *       }
 *    }
 * }
 *
 * @response 422 {
 *    "error": true,
 *    "message": "The given data was invalid.",
 *    "errors": {
 *       "title": ["The title field is required."],
 *       "note_type": ["The selected note type is invalid."]
 *    }
 * }
 *
 * @response 500 {
 *    "error": true,
 *    "message": "An error occurred while updating the note.",
 *    "error": "Detailed error message here"
 * }
 */

   public function update(Request $request)
{
    $isApi = $request->get('isApi', false);

    try {
        $formFields = $request->validate([
            'note_type' => ['required', 'in:text,drawing'],
            'id' => ['required', 'exists:notes,id'],
            'title' => ['required'],
            'color' => ['required'],
            'description' => ['nullable'],
            'drawing_data' => ['nullable', 'string', 'required_if:note_type,drawing']
        ]);

        $drawingData = $request->input('drawing_data');
        $decodedSvg = $drawingData ? base64_decode($drawingData) : null;
        $formFields['drawing_data'] = $decodedSvg;

        $note = Note::findOrFail($formFields['id']);

        if ($note->update($formFields)) {
            Session::flash('message', 'Note updated successfully.');
            return formatApiResponse(
                false,
                'Note updated successfully.',
                [
                    'id' => $note->id,
                    'data' => formatNote($note)
                ]
            );
        } else {
            return formatApiResponse(true, "Note couldn't be updated.", [], 500);
        }
    } catch (ValidationException $e) {
        return formatApiValidationError($isApi, $e->errors());
    } catch (\Exception $e) {
        return formatApiResponse(true, 'An error occurred while updating the note.', ['error' => $e->getMessage()], 500);
    }
}

    public function get($id)
    {
        $note = Note::findOrFail($id);
        return response()->json(['note' => $note]);
    }



    public function destroy($id)
    {
        $response = DeletionService::delete(Note::class, $id, 'Note');
        return $response;
    }
    public function destroy_multiple(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'ids' => 'required|array', // Ensure 'ids' is present and an array
            'ids.*' => 'integer|exists:notes,id' // Ensure each ID in 'ids' is an integer and exists in the notes table
        ]);

        $ids = $validatedData['ids'];
        $deletedIds = [];
        $deletedTitles = [];

        // Perform deletion using validated IDs
        foreach ($ids as $id) {
            $note = Note::findOrFail($id);
            // Add any additional logic you need here, such as updating related data
            $deletedIds[] = $id;
            $deletedTitles[] = $note->title; // Assuming 'title' is a field in the notes table
            DeletionService::delete(Note::class, $id, 'Note');
        }
        Session::flash('message', 'Note(s) deleted successfully.');
        return response()->json([
            'error' => false,
            'message' => 'Note(s) deleted successfully.',
            'id' => $deletedIds,
            'titles' => $deletedTitles
        ]);
    }
}
