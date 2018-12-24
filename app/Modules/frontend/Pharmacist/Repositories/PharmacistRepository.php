<?php

namespace App\Modules\frontend\Pharmacist\Repositories;
use App\Models\Menu;
use App\Modules\Framework\RepositoryImplementation;
use App\Models\PharmacistUser;
use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;
use Spatie\Permission\Models\Role;
use Auth;
class PharmacistRepository extends RepositoryImplementation implements  PharmacistInterface
{

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new PharmacistUser();
    }
    public function registerPharmacist($attributes)
    {

        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $attributes['name'];
            $user->email = $attributes['email'];
            $user->phone = $attributes['phone'];
            $user->password = bcrypt($attributes['password']);
            $user->save();

            $role = Role::where('name', '=', 'pharmacist')->first();

            $post = new PharmacistUser();
            $post->user_id = $user->id;
            $post->name = $attributes['name'];
            $post->nmc_number = $attributes['nmc_number'];
            $post->qualification = $attributes['qualification'];
            $post->shop_name = $attributes['shop_name'];
            $post->shop_address = $attributes['shop_address'];
            $post->education = $attributes['education'];

            $profile_image = imageUpload(isset($attributes['image'])?$attributes['image']:'', 'uploads_pharmacist_profileimage' );
            $license_image =  imageUpload(isset($attributes['license_front'])?$attributes['license_front']:'', 'uploads_pharmacist_licenseimage' );
            $citizenship_image= imageUpload(isset($attributes['citizenship_front'])?$attributes['citizenship_front']:'', 'uploads_pharmacist_citizenshipimage' );

            $post->image=isset($profile_image['image'])?$profile_image['image']:'';
            $post->license_front=isset($license_image['image'])?$license_image['image']:'';

            $post->citizenship_front=isset($citizenship_image['image'])?$citizenship_image['image']:'';


            $post->save();



            $user->assignRole($role);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());

        }
        //pharmacist login
        $userdata = array(
            'email' => $attributes['email'],
            'password' => $attributes['password']
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {
            $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
            $this->view_data['user'] = Auth::user();
            return true;

        } else {
            // validation not successful, send back to form
            return false;
        }
    }

}