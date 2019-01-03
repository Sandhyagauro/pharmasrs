<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\CategoryDepartment;
use App\Models\CounselingInfo;
use App\Models\PharmacistUser;
use App\Modules\frontend\Categories\Repositories\CategoryInterface;
use App\Modules\frontend\Pharmacist\Repositories\PharmacistInterface;
use Illuminate\Http\Request;
use Session;
use App\Models\Menu;
use DB;
use App\User;
use Spatie\Permission\Models\Role;
use Auth;

class PharmacistUserController extends BaseController
{
   private $categories;

    public function __construct(CategoryInterface $categories, PharmacistInterface $pharmacist)
    {
        parent::__construct();
        $this->categories=$categories;
        $this->pharmacist = $pharmacist;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $this->view_data['departments'] =  $this->categories->getAll();
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
       
        $this->validate($request, [
            'email' => 'unique:users,email,',
            'phone' => 'unique:users,phone,',
            'nmc_number' => 'unique:pharmacist_users,nmc_number,',
            
        ]);

        $register = $this->pharmacist->registerPharmacist($request->all());
        if($register){
            return redirect()->route('pharmacist.dashboard');
        }else{
            return back();
        }

    }

    public function login(Request $request)
    {
        $user = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL )
            ? 'email'
            : 'phone';

        $request->merge([
            $user => $request->input('email')
        ]);
        if (Auth::attempt($request->only($user, 'password')) && Auth::user()->hasRole('pharmacist')) {
            return redirect('/pharmacist/dashboard');
        }
        Auth::logout();
        Session::flash('message', 'Something went wrong');
        return redirect('/login-page');
    }

    public function dashboard()
    {

        $login_user = Auth::user();
        if(!$login_user){
            return redirect('/login-page');
        }else {
            $role = $login_user->roles->first()->name;
            if ($role == 'pharmacist') {
                $this->view_data['user'] = PharmacistUser::select('users.email', 'users.phone', 'pharmacist_users.*')->where('user_id', '=', $login_user->id)
                    ->join('users', 'users.id', '=', 'pharmacist_users.user_id')->first();
                $this->view_data['prescriptions'] = CounselingInfo::where('user_id', '=', $login_user->id)->get();
                return view('frontend.pages.pharmacist.dashboard', $this->view_data);
            } else {
                return redirect('/login-page');
            }
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $pharmacist_user = PharmacistUser::find($id);
        $pharmacist_user->name = $request->name;
        $pharmacist_user->nmc_number = $request->nmc_number;
        $pharmacist_user->qualification = $request->qualification;
        $pharmacist_user->education = $request->education;
        $pharmacist_user->shop_name = $request->shop_name;
        $pharmacist_user->shop_address = $request->shop_address;

        $pharmacist_user->save();
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
                $pharmacist_user->image = $destination . "/" . $fileName;
                $image->move($destination, $fileName);
            }
            $pharmacist_user->save();
        }

        $user = User::where('id','=',$pharmacist_user->user_id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        Session::flash('message','Profile Updated Successfully');
        return redirect()->back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect ('/login-page');
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
