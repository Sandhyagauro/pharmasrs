<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\CategoryDepartment;
use App\Models\PharmacistUser;
use Illuminate\Http\Request;
use Session;
use App\Models\Menu;
use DB;
use App\User;
use Spatie\Permission\Models\Role;
use Auth;

class PharmacistUserController extends BaseController
{


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
        $this->view_data['departments'] = CategoryDepartment::orderBy('id', 'desc')->get();
        return view('frontend.pages.pharmacist.register', $this->view_data);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login_user = Auth::user();
        $this->validate($request, [
            'email' => 'unique:users,email,' . $login_user->id
        ]);


        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            $role = Role::where('name', '=', 'pharmacist')->first();

            $post = new PharmacistUser();
            $post->user_id = $user->id;
            $post->category_department_id = $request->category_department_id;
            $post->name = $request->name;
            $post->nmc_number = $request->nmc_number;
            $post->qualification = $request->qualification;
            $post->speciality = $request->speciality;
            $post->website = $request->website;
            $post->shop_name = $request->shop_name;
            $post->shop_address = $request->shop_address;
            $post->shop_number = $request->shop_number;
            $post->specialization = $request->specialization;
            $post->experience = $request->experience;
            $post->education = $request->education;
            $post->journals = $request->journals;
            $post->awards = $request->awards;
            $post->memberships = $request->memberships;
            $post->save();

            $user->assignRole($role);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());

        }
        //patient login
        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
        );

        // attempt to do the login

        if (Auth::attempt($userdata)) {
            return view('frontend.pages.pharmacist.dashboard');
        } else {
            // validation not successful, send back to form
            return back();
        }

    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user)) {
            return redirect('/pharmacist/dashboard');
        } else {
            Session::flash('message', 'Something went wrong');
            return redirect('/login-page');

        }
    }

    public function dashboard()
    {
        $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
        $this->view_data['user'] = Auth::user();
        return view('frontend.pages.pharmacist.dashboard', $this->view_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //
    }


}
