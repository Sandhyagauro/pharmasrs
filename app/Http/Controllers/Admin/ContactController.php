<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = ContactDetail::all();
        return view('backend.admin.contact.index', compact('posts'));
    }

    public function destroy($id)
    {
        $post = ContactDetail::find($id);
        $post->delete();
        Session::flash('message', 'Information has been Deleted');

        return redirect('admin/contact');

    }
}
