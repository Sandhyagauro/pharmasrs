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
        $this->validate($request, [
            'email' => 'unique:users,email,'
        ]);
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
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $type = $image->getClientOriginalExtension();
                $destination = 'uploads';
                if (empty($image)) {
                    return redirect()->back()->withInput();
                } else if (!$image->isValid()) {
                    return redirect()->back()->withInput();
                } else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
                    return redirect()->back()->withInput();
                } else {
                    $fileName = rand(1, 999999) . '.' . $type;
                    $post->image = $destination . "/" . $fileName;
                    $image->move($destination, $fileName);
                }
                $post->save();
            }

            $user->assignRole($role);
            DB::commit();

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
            $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
            $this->view_data['user'] = Auth::user();
            return redirect()->route('patient.dashboard');
//            return response()->json(['success' => true, 'message' => 'Registered successfully', 'data' => ['route' => route('patient.dashboard')]], 200);
        } else {
            // validation not successful, send back to form
            return back();
//            return response()->json(['success' => false, 'message' => 'Registered successfully', 'data' => ['route' => route('patient.dashboard')]], 200);
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

    }

    public function updateProfile(Request $request, $id)
    {

        $patient_user = PatientUser::find($id);
        $patient_user->name = $request->name;
        $patient_user->email = $request->email;
        $patient_user->country = $request->country;
        $patient_user->phone = $request->phone;
        $patient_user->address = $request->address;
        $patient_user->dob = $request->dob;
        $patient_user->gender = $request->gender;
        $patient_user->weight = $request->weight;
        $patient_user->feet = $request->feet;
        $patient_user->inches = $request->inches;
        $patient_user->blood_group = $request->blood_group;
        $patient_user->save();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $type = $image->getClientOriginalExtension();
            $destination = 'uploads';
            if (empty($image)) {
                return redirect()->back()->withInput();
            } else if (!$image->isValid()) {
                return redirect()->back()->withInput();
            } else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
                return redirect()->back()->withInput();
            } else {
                $fileName = rand(1, 999999) . '.' . $type;
                $patient_user->image = $destination . "/" . $fileName;
                $image->move($destination, $fileName);
            }
            $patient_user->save();
        }

        $user = User::where('id','=',$patient_user->user_id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        Session::flash('message','Profile Updated Successfully');
        return redirect()->back();
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
        $login_user = Auth::user();
        $role =$login_user->roles->first()->name;
        if ($role == 'patient'){
            $this->view_data['user'] = PatientUser::where('user_id','=',$login_user->id)->first();
        }

        return view('frontend.pages.patient.dashboard', $this->view_data);
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user)) {
            return redirect('/patient/dashboard');
        } else {
            Session::flash('message', 'Something went wrong');
            return redirect('/login-page');

        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect ('/login-page');
    }
}
