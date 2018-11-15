<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\PostHasImage;
use Illuminate\Http\Request;
use Session;
class BannerController extends Controller
{

    protected $banner;

    public function __construct()
    {


    }


    public function index()
    {
        $posts =Post::where('type', '=', 'banner')->orderby('id', 'desc')->get();
        return view('backend.admin.banner.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.admin.banner.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',]);
        $image = new Image();
        $banner_pic = $request->file('image');
        $type = $banner_pic->getClientOriginalExtension();
        $destination = 'uploads';
        if (empty($banner_pic)) {
            return redirect()->back()->withInput();
        } else if (!$banner_pic->isValid()) {
            return redirect()->back()->withInput();
        } else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
            return redirect()->back()->withInput();
        } else {
            $fileName = rand(1, 999999) . '.' . $type;
            $image->file_data = $destination . "/" . $fileName;
            $banner_pic->move($destination, $fileName);

        }
        $image->save();

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->type = 'banner';
        $post->save();


        $post_image = new PostHasImage();
        $post_image->post_id = $post->id;
        $post_image->file_id = $image->id;
        $post_image->save();
        Session::flash('message', 'Banner added Successfully');

        return Redirect('admin/banner');

    }


    public function show($id)
    {
//        $banner = $this->banner->find($id);
//
//        return view('backend.banner.show', compact('banner'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.admin.banner.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',

        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->excerpt = $request->input('excerpt');
        $post->save();
        $post->type = 'banner';

        if ($request->image) {
            $post_image_id = PostHasImage::where('post_id', '=', $post->id)->first();
            $file = Image::find($post_image_id->file_id);
            $banner_pic = $request->file('image');

            $type = $banner_pic->getClientOriginalExtension();
            $destination = 'uploads';
            if (empty($banner_pic)) {
                return redirect()->back()->withInput();
            }
            else if (!$banner_pic->isValid()) {
                return redirect()->back()->withInput();
            }
            else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
                return redirect()->back()->withInput();
            }
            else {
                $fileName = rand(1, 999999) . '.' . $type;
                $file->file_data = $destination . "/" . $fileName;
                $banner_pic->move($destination, $fileName);
            }
            $file->save();
        }
        Session::flash('message', 'Banner updated Successfully');
        return redirect('admin/banner');

    }


    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('message', 'Banner Deleted Successfully');
        return redirect('admin/banner');

    }

}
