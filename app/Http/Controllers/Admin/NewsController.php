<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\PostHasImage;
use Illuminate\Http\Request;

use Session;
/**
 * Class PageController.
 *
 * @author BanquadeSquad
 */
class NewsController extends Controller
{


    public function index()
    {

        $posts = Post::where('type','=','news')->orderBy('created_at', 'desc')->get();
        return view('backend.admin.news.index', compact('posts'));


    }

    public function create()
    {
        return view('backend.admin.news.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->type = 'news';
        $post->save();
        if (isset($request->image)) {
            $file = new Image();
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
                $file->file_data = $destination . "/" . $fileName;
                $banner_pic->move($destination, $fileName);
            }

            $file->save();

            $post_file = new PostHasImage();
            $post_file->post_id = $post->id;
            $post_file->file_id = $file->id;
            $post_file->save();

        }

        Session::flash('message', 'News added Successfully');
        return redirect('admin/news')->with('success', 'Content added successfully');

    }

    public function edit($id)
    {
        $post = post::find($id);
        return view('backend.admin.news.edit',compact('post'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $page = Post::find($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->excerpt = $request->excerpt;
        $page->save();

        if (isset($request->image)) {
            $post_image_id = PostHasImage::where('post_id', '=', $page->id)->first();
<<<<<<< HEAD

            if (!empty($post_image_id)) {

=======
            if(!$post_image_id){
                 $file = new Image();
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
                $file->file_data = $destination . "/" . $fileName;
                $banner_pic->move($destination, $fileName);
            }

            $file->save();

            $post_file = new PostHasImage();
            $post_file->post_id = $page->id;
            $post_file->file_id = $file->id;
            $post_file->save();
                            
            }
            else{
>>>>>>> 5a21e84884058c369cb6d3bd3b6b67395b409888
            $file = Image::find($post_image_id->file_id);
            $post_pic = $request->file('image');

            $type = $post_pic->getClientOriginalExtension();
            $destination = 'uploads';
            if (empty($post_pic)) {
                return redirect()->back()->withInput();
            } else if (!$post_pic->isValid()) {
                return redirect()->back()->withInput();
            } else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
                return redirect()->back()->withInput();
            } else {
                $fileName = rand(1, 999999) . '.' . $type;
                $file->file_data = $destination . "/" . $fileName;
                $post_pic->move($destination, $fileName);
            }
            $file->save();
<<<<<<< HEAD
            } else {
                $file = new Image();
                $post_pic = $request->file('image');
                $type = $post_pic->getClientOriginalExtension();
                $destination = 'uploads';

                if (empty($post_pic)) {
                    return redirect()->back()->withInput();
                } else if (!$post_pic->isValid()) {
                    return redirect()->back()->withInput();
                } else if (!$type == 'jpeg' && $type == 'png' && $type == 'svg' && $type == 'bmp' && $type == 'jpg' && $type == 'ico' && $type == 'gif') {
                    return redirect()->back()->withInput();
                } else {
                    $fileName = rand(1, 999999) . '.' . $type;
                    $file->file_data = $destination . "/" . $fileName;
                    $post_pic->move($destination, $fileName);
                }

                $file->save();

                $post_file = new PostHasImage();
                $post_file->post_id = $page->id;
                $post_file->file_id = $file->id;
                $post_file->save();
            }
=======
}

>>>>>>> 5a21e84884058c369cb6d3bd3b6b67395b409888

        }

        Session::flash('message', 'News Updated Successfully');
        return redirect('admin/news')->with('success', 'Post updated');

    }

    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        Session::flash('message', 'News Deleted Successfully');

        return redirect('admin/news');

    }


}



















