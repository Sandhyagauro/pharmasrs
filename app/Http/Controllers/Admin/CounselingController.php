<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CounselingInfo;
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
class CounselingController extends Controller
{


    public function index()
    {

        $posts = CounselingInfo::select('users.name','users.email','category_departments.title','counseling_infos.*')
            ->leftjoin('category_departments','category_departments.id','=','counseling_infos.category_department_id')
            ->join('users','users.id','=','counseling_infos.user_id')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.admin.consult.index', compact('posts'));


    }

    public function create()
    {
//        return view('backend.admin.post.create');

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }


}



















