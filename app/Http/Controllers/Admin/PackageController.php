<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\PackageList;
use App\PostHasImage;
use Illuminate\Http\Request;
use Session;
class PackageController extends Controller
{

    protected $banner;

    public function __construct()
    {


    }


    public function index()
    {
        $posts =PackageList::all();
        return view('backend.admin.package.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.admin.package.create');
    }


    public function store(Request $request)
    {
        $post = new PackageList();
        $post->amount = $request->amount;
        $post->duration = $request->duration;
        $post->save();
        Session::flash('message', 'Package added Successfully');
        return Redirect('admin/package');

    }


    public function show($id)
    {
//        $banner = $this->banner->find($id);
//
//        return view('backend.banner.show', compact('banner'));
    }


    public function edit($id)
    {
        $post = PackageList::find($id);
        return view('backend.admin.package.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {

        $post = PackageList::find($id);
        $post->amount = $request->amount;
        $post->duration = $request->duration;
        $post->save();

        Session::flash('message', 'Package updated Successfully');
        return redirect('admin/package');

    }


    public function destroy($id)
    {
        $post=PackageList::find($id);
        $post->delete();
        Session::flash('message', 'Package Deleted Successfully');
        return redirect('admin/package');

    }

}
