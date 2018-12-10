<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryDepartment;
use App\Models\CounselingInfo;
use App\Models\Image;
use App\Models\Post;
use App\Modules\backend\Counseling\Repositories\CounselingInterface;
use App\Modules\backend\User\Repositories\UserInterface;
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
    public function __construct(CounselingInterface $counseling)
    {
        $this->counseling = $counseling;

    }


    public function index()
    {

        $this->view_data['posts'] =$this->counseling->counselingList();
        return view('backend.admin.consult.index',$this->view_data);


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
        $this->view_data['post'] = CounselingInfo::where('user_id','=',$id)->first();
        return view('backend.admin.consult.reply-prescription', $this->view_data);
    }

    public function replyPrescription(Request $request)
    {
        $user = Auth::user();

        $precaution_upload_by_user = User::where('id', '=', $request->reply_to)->first();

        $post = new PrescriptionReply();
        $post->replied_by = $user->id;
        $post->reply_to = $request->reply_to;
        $post->category_id = $request->category_department_id;
        $post->counseling_info_id = $request->counseling_info_id;
        $post->medicine_name = $request->medicine_name;
        $post->medicine_cause = $request->medicine_cause;
        $post->medicine_routine = $request->medicine_routine;
        $post->precaution = $request->precaution;
        $post->diet = $request->diet;
        $post->if_dose_missed = $request->if_dose_missed;
        $post->keyword = $request->keyword;
        $post->save();

        $vars = [
            'email' => $precaution_upload_by_user->email,
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
        Session::flash('message', 'Replied Prescription to email ' . $vars['email'] . '.Successfully!!! ');
        return redirect('/admin/consult');


    }

    public function show($id)
    {
        $this->view_data['post'] =  $this->counseling->show($id);
        return view('backend.admin.consult.show',$this->view_data);
    }


}



















