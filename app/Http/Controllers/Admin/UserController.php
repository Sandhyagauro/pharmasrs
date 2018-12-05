<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    public function __construct()
    {
 //$this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();

        return view('backend.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = \App\User::findOrfail($id);
        $roles = Role::all()->pluck('name');


        $permissions = Permission::all()->pluck('name');
        $userRoles = $user->roles;


        $userPermissions = $user->permissions;

        return view('backend.admin.users.edit', compact('user', 'roles', 'permissions', 'userRoles', 'userPermissions','categories','userCategories'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addRole(Request $request){
        $user = \App\User::findOrfail($request->user_id);
        $user->assignRole($request->role_name);
        return redirect('admin/users/edit/'.$request->user_id);
    }
     public function revokeRole($role, $user_id)
        {
            $user = \App\User::findorfail($user_id);

            $user->removeRole(str_slug($role, ' '));

            return redirect('users/edit/'.$user_id);
        }
}
