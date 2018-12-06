<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CounselingInfo;
use App\Models\Image;
use App\Models\Post;
use App\PostHasImage;
use App\Models\PrescriptionReply;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use Input;
use Mail;
/**
 * Class PageController.
 *
 * @author BanquadeSquad
 */
class CounselingController extends Controller
{


    public function index()
    {

        $posts = CounselingInfo::select('users.name', 'users.email', 'category_departments.title', 'counseling_infos.*')
            ->leftjoin('category_departments', 'category_departments.id', '=', 'counseling_infos.category_department_id')
            ->join('users', 'users.id', '=', 'counseling_infos.user_id')
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

    public function reply($id)
    {
        return view('backend.admin.consult.reply-prescription', compact('id'));
    }

    public function replyPrescription(Request $request)
    {
        $user = Auth::user();

        $precaution_upload_by_user = User::where('id','=',$request->reply_to)->first();

        $post = new PrescriptionReply();
        $post->replied_by = $user->id;
        $post->reply_to = $request->reply_to;
        $post->medicine_name = $request->medicine_name;
        $post->medicine_cause = $request->medicine_cause;
        $post->medicine_routine = $request->medicine_routine;
        $post->precaution = $request->precaution;
        $post->diet = $request->diet;
        $post->if_dose_missed = $request->if_dose_missed;
        $post->save();

        $vars = [
            'email'=>$precaution_upload_by_user->email,
            'medicine_name' => Input::get('medicine_name'),
            'medicine_cause' => Input::get('medicine_cause'),
            'medicine_routine' => Input::get('medicine_routine'),
            'precaution' => Input::get('precaution'),
            'diet' => Input::get('diet'),
            'if_dose_missed' => Input::get('if_dose_missed')
        ];

        Mail::send('backend.admin.consult.email', $vars, function ($message) use ($vars) {

            $message->to([$vars['email'], config('app.admin_email')], 'Person');
            $message->subject('Reply to Precaution');

        });
        Session::flash('message', 'Replied Prescription to email '.$vars['email'].'.Successfully!!! ');
        return redirect('/admin/consult');


    }


}



















