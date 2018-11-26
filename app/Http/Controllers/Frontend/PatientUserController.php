<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PatientUser;
use Illuminate\Http\Request;

use DB;
use App\User;
use Session;
use Spatie\Permission\Models\Role;
use Auth;

class PatientUserController extends BaseController
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
        return view('frontend.pages.patient.register', $this->view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //patient register
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            $role = Role::where('name', '=', 'patient')->first();

            $post = new PatientUser();
            $post->user_id = $user->id;
            $post->name = $request->name;
            $post->email = $request->email;
            $post->country = $request->country;
            $post->phone = $request->phone;
            $post->address = $request->address;
            $post->dob = $request->dob;
            $post->gender = $request->gender;
            $post->weight = $request->weight;
            $post->feet = $request->feet;
            $post->inches = $request->inches;
            $post->blood_group = $request->blood_group;
            $post->save();

            $user->assignRole($role);

            DB::commit();
            Session::flash('message', 'Registered successfully');

            // all good
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
            return response()->json(['success' => true, 'message' => 'Registered successfully', 'data' => ['route' => route('patient.dashboard')]], 200);
        } else {
            // validation not successful, send back to form
            return response()->json(['success' => false, 'message' => 'Registered successfully', 'data' => ['route' => route('patient.dashboard')]], 200);
        }

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
        dd($id);
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

    public function dashboard()
    {
        $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
        $this->view_data['user'] = Auth::user();
        return view('frontend.pages.patient.dashboard',$this->view_data);
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($user)){
            return redirect('/patient/dashboard');
        }else{
            Session::flash('message','Something went wrong');
            return redirect('/login-page');

        }
    }
}
