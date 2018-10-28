<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;


class BannerController extends Controller
{


    public function index()
    {
        $banners = Post::where('type', '=', 'banner')->orderby('id', 'desc')->get();
        return view('backend.admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.admin.banner.create');
    }


    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
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


        $post_image_relations = new PostImagesRelations();
        $post_image_relations->post_id = $post->id;
        $post_image_relations->file_id = $image->id;
        $post_image_relations->save();
        Flash::message('Contents added successfully');
        return Redirect('en/admin/banner');

    }


    public function show($id)
    {
//        $banner = $this->banner->find($id);
//
//        return view('backend.banner.show', compact('banner'));
    }


    public function edit($id)
    {
        $banner = Post::find($id);
        return view('backend.Admin.banner.edit', compact('banner'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
//            'image' => 'required'
        ]);
        $banner = Post::find($id);
        $banner->title = $request->input('title');
        $banner->content = $request->input('content');
        $banner->save();
        $banner->type = 'banner';

        if ($request->image) {
            $post_relation_id = PostImagesRelations::where('post_id', '=', $banner->id)->first();
            $file = Image::find($post_relation_id->file_id);
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
        Flash::message('Contents Updated Successfully');

        return redirect('en/admin/banner');

    }


    public function destroy($id)
    {
        $banner=Post::find($id);
        $banner->delete();
        Flash::message('Content Deleted Successfully');

        return redirect('en/admin/banner');

    }

}
