<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\DeletionService;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Artisan;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('settings.permission_settings', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $projects = Permission::where('name', 'like', '%projects%')->get()->sortBy('name');
        $tasks = Permission::where('name', 'like', '%tasks%')->get()->sortBy('name');
        $users = Permission::where('name', 'like', '%users%')->get()->sortBy('name');
        $clients = Permission::where('name', 'like', '%clients%')->get()->sortBy('name');
        return view('roles.create_role', ['projects' => $projects, 'tasks' => $tasks, 'users' => $users, 'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required']
        ]);

        $formFields['guard_name'] = 'web';

        $role = Role::create($formFields);
        $filteredPermissions = array_filter($request->input('permissions'), function ($permission) {
            return $permission != 0;
        });
        $role->permissions()->sync($filteredPermissions);
        Artisan::call('cache:clear');

        Session::flash('message', 'Role created successfully.');
        return response()->json(['error' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $role = Role::findOrFail($id);
        $role_permissions = $role->permissions;
        $guard = $role->guard_name == 'client' ? 'client' : 'web';
        return view('roles.edit_role', ['role' => $role, 'role_permissions' => $role_permissions, 'guard' => $guard, 'user' => getAuthenticatedUser()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'name' => ['required']
        ]);
        $role = Role::findOrFail($id);
        $role->name = $formFields['name'];
        $role->save();
        $filteredPermissions = array_filter($request->input('permissions'), function ($permission) {
            return $permission != 0;
        });
        $role->permissions()->sync($filteredPermissions);

        Artisan::call('cache:clear');

        Session::flash('message', 'Role updated successfully.');
        return response()->json(['error' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $response = DeletionService::delete(Role::class, $id, 'Role');
        return $response;
    }

    public function create_permission()
    {
        // $createProjectsPermission = Permission::findOrCreate('create_tasks', 'client');
        Permission::create(['name' => 'edit_projects', 'guard_name' => 'client']);
    }

    /**
 * Get all roles.
 *
 * Returns a list of all roles available in the system.
 *
 * @response 200 {
 *   "error": false,
 *   "roles": [
 *     {
 *       "id": 1,
 *       "name": "Admin",
 *       "guard_name": "web",
 *       "created_at": "2024-01-01T12:00:00.000000Z",
 *       "updated_at": "2024-01-01T12:00:00.000000Z"
 *     },
 *     {
 *       "id": 2,
 *       "name": "Client",
 *       "guard_name": "client",
 *       "created_at": "2024-01-01T12:00:00.000000Z",
 *       "updated_at": "2024-01-01T12:00:00.000000Z"
 *     }
 *   ]
 * }
 */
public function apiRolesIndex($id = null)
{
    if ($id) {
        $role = Role::with('permissions')->find($id);

        if (!$role) {
            return response()->json([
                'error' => true,
                'message' => 'Role not found.'
            ], 404);
        }

        return response()->json([
            'error' => false,
            'role' => $role
        ]);
    }

    $roles = Role::with('permissions')->get();

    return response()->json([
        'error' => false,
        'roles' => $roles
    ]);
    }
    public function apiPermissionList($id = null)
    {
        if ($id) {
            $permission = Permission::with('roles')->find($id);

            if (!$permission) {
                return response()->json([
                    'error' => true,
                    'message' => 'Permission not found.'
                ], 404);
            }

            return response()->json([
                'error' => false,
                'permission' => $permission
            ]);
        }

        $permissions = Permission::with('roles')->get();

        return response()->json([
            'error' => false,
            'permissions' => $permissions
        ]);
    }
}



