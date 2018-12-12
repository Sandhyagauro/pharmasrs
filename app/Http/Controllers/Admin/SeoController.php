<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoTool;
use Illuminate\Http\Request;

use Session;

/**
 * Class PageController.
 *
 * @author BanquadeSquad
 */
class SeoController extends Controller
{


    public function index()
    {

        $posts = SeoTool::all();
        return view('backend.admin.seo.index', compact('posts'));


    }

    public function create()
    {
        return view('backend.admin.seo.create');

    }

    public function store(Request $request)
    {
        $post = new SeoTool();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->keyword = $request->keyword;
        $post->url = $request->url;
        $post->save();

        Session::flash('message', 'Seo added Successfully');
        return redirect('admin/seo')->with('success', 'Content updated successfully');

    }

    public function edit($id)
    {
        $post = SeoTool::find($id);

        return view('backend.admin.seo.edit',compact('post'));

    }

    public function update(Request $request, $id)
    {
        $post = SeoTool::where('id','=',$id)->first();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->keyword = $request->keyword;
        $post->url = $request->url;
        $post->save();
        Session::flash('message', 'Seo added Successfully');
        return redirect('admin/seo')->with('success', 'SEo updated successfully');


    }

    public function destroy($id)
    {
        $post = SeoTool::find($id);
        $post->delete();
        Session::flash('message', 'Seo Deleted Successfully');

        return redirect('admin/seo');
    }


}



















