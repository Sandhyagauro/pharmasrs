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
//            $post->category_department_id = $attributes['category_department_id'];
            $post->name = $attributes['name'];
            $post->nmc_number = $attributes['nmc_number'];
            $post->qualification = $attributes['qualification'];
//            $post->speciality = $attributes['speciality'];
//            $post->website = $attributes['website'];
            $post->shop_name = $attributes['shop_name'];
            $post->shop_address = $attributes['shop_address'];
//            $post->shop_number = $attributes['shop_number'];
//            $post->specialization = $attributes['specialization'];
//            $post->experience = $attributes['experience'];
//            $post->education = $attributes['education'];
//            $post->journals = $attributes['journals'];
//            $post->awards = $attributes['awards'];
//            $post->memberships = $attributes['memberships'];
            $post->save();
            if (Input::hasFile('image')) {
                $image = Input::file('image');
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