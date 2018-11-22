<?php

namespace App\Http\Controllers\Admin;
use App\Models\CategoryDepartment;
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
class DepartmentController extends Controller
{


    public function index()
    {

        $posts = CategoryDepartment::all();
        return view('backend.admin.department.index', compact('posts'));


    }

    public function create()
    {
        return view('backend.admin.department.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $post = new CategoryDepartment();
        $post->title = $request->title;
        $post->content = $request->content;
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
                $post->image = $destination . "/" . $fileName;
                $image->move($destination, $fileName);

            }
            $post->save();

        }



        Session::flash('message', 'Clinic department added Successfully');
        return redirect('admin/department')->with('success', 'Content added successfully');

    }

    public function edit($id)
    {
        $post = CategoryDepartment::find($id);
        return view('backend.admin.department.edit',compact('post'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $post = CategoryDepartment::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        if ($request->image) {

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
                $post->image = $destination . "/" . $fileName;
                $image->move($destination, $fileName);

            }
            $post->save();

        }



        Session::flash('message', 'Clinic Department Updated Successfully');
        return redirect('admin/department');

    }

    public function destroy($id)
    {
        $post = CategoryDepartment::find($id);
        $post->delete();
        Session::flash('message', 'Clinic Department  Deleted Successfully');

        return redirect('admin/department');

    }


}



















