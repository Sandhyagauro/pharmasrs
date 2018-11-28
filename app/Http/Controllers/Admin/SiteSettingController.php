<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\SiteSetting;
use App\PostHasImage;
use Illuminate\Http\Request;

use Session;

/**
 * Class PageController.
 *
 * @author BanquadeSquad
 */
class SiteSettingController extends Controller
{


    public function index()
    {
        $post = SiteSetting::where('id', '=', 1)->first();

        return view('backend.admin.site.index', compact('post'));


    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {

        $post = SiteSetting::find($id);
        $post->address = $request->address;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->facebook_link = $request->facebook_link;
        $post->twitter_link = $request->twitter_link;
        $post->save();

        if($request->hasFile('image')){
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
                $post->logo = $destination . "/" . $fileName;
                $image->move($destination, $fileName);

            }
            $post->save();

        }

        Session::flash('message', 'Site settings Updated Successfully');
        return redirect('admin/site');

    }

    public function destroy($id)
    {

    }


}



















