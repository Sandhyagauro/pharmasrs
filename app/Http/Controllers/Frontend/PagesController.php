<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use App\Models\Post;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Session;

class PagesController extends Controller
{


    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {

        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'frontend/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['news'] = Post::where('type','=','news')->limit(3)->orderBy('id','desc')->get();
                    $this->view_data['departments'] = Post::where('type','=','department')->limit(6)->orderBy('id','desc')->get();
                    break;
                case 'aboutus':
                    break;
                case 'news-and-articles':
                    break;
                case 'contactus':
                    break;
                case 'blog-detail':
                    break;
                default:
                    break;

            }
            return view('frontend.pages.' . $slug,$this->view_data);
        }
        // 3. No page exist (404)
            return view('frontend.pages.404');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $contact = new ContactDetail();
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $vars = ['name' => Input::get('name'),
            'address' => Input::get('address'),
            'mobile' => Input::get('mobile'),
            'email' => Input::get('email'),
            'content' => Input::get('message')
        ];

        Mail::send('frontend.email.contact', $vars, function ($message) use ($vars) {

            $message->to([$vars['email'], config('app.admin_email')], 'Person');
            $message->subject('New message from contact form');

        });
        Session::flash('message', 'Thanks for contacting us!');
        return redirect('/');
    }

    public function destroy($id)
    {
        //
    }
}
