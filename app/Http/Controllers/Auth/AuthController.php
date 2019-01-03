<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PatientUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Validator;
use Session;

use App\User;
use Auth;
use Socialite;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{


    public function __construct()
    {

    }

    //login with social media
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect()->route('patient.dashboard');
//        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }
        try {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider' => $provider,
                'provider_id' => $user->id
            ]);

            $post = new PatientUser();
            $post->user_id = $user->id;
            $post->name = $user->name;
            $post->email = $user->email;
            $post->save();

            $role = Role::where('name', '=', 'patient')->first();
            $user->assignRole($role);
            return $user;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return $e;
        }
    }

    //  change pw
    Public function changePassword(Request $request,$id)
    {


        $user = Auth::user();

        $currentPassword = $request->currentPassword;
        $newPassword = $request->newPassword;

        if (Hash::check($currentPassword, $user->password)) {

            $user = User::where('id','=',$id)->first();
            $user->password = Hash::make($newPassword);
            $user->save();

            Session::flash('message','Password Changed to '.$newPassword);
            return Redirect::back();

        }
        else
        {
            Session::flash('error-message','Current Password not matched');
            return Redirect::back();

        }

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
        //
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
