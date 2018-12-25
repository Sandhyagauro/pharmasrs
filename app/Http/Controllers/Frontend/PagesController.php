<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryDepartment;
use App\Models\ContactDetail;
use App\Models\Menu;
use App\Models\PackageList;
use App\Models\PharmacistUser;
use App\Models\Post;
use App\Models\SeoTool;
use App\Models\SiteSetting;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Session;

class PagesController extends BaseController
{


    public function __construct()
    {
        parent::__construct();


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($slug = null )
    {

        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'frontend/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':

                    $this->view_data['banners'] = Post::where('type', '=', 'banner')->orderBy('id', 'desc')->get();
                    $this->view_data['teamSection'] = Post::where('slug', '=', 'an-amazing-team')->first();
                    $this->view_data['teams'] = Post::where('type', '=', 'team')->orderBy('id', 'desc')->get();
                    $this->view_data['clinicDepartment'] = Post::where('slug', '=', 'clinic-departments')->first();
                    $this->view_data['aboutSection'] = Post::where('slug', '=', 'about-pharma-srs')->first();
                    $this->view_data['aboutSectionImage2'] = Post::where('slug', '=', 'about-apharma-srs-1')->first();
                    $this->view_data['departments'] = CategoryDepartment::limit(6)->orderBy('id', 'desc')->get();
                    $this->view_data['news'] = Post::where('type', '=', 'news')->limit(3)->orderBy('id', 'desc')->get();

                    break;
                case 'aboutus':
                    $this->view_data['aboutBanner'] = Post::where('slug', '=', 'about-us')->first();
                    $this->view_data['aboutSection'] = Post::where('slug', '=', 'about-pharma-srs')->first();
                    $this->view_data['happyCustomers'] = Post::where('slug', '=', 'happy-customers')->first();
                    $this->view_data['availablePharmacist'] = Post::where('slug', '=', 'available-pharmacist')->first();
                    $this->view_data['developmentHours'] = Post::where('slug', '=', 'development-hours')->first();
                    $this->view_data['pharmacists'] = PharmacistUser::orderBy('id', 'asc')->get();
                    $this->view_data['ansTickets'] = Post::where('slug', '=', 'answered-tickets')->first();
                    break;
                case 'news-and-articles':
                    $this->view_data['newsBanner'] = Post::where('slug', '=', 'news-and-articles')->first();
                    $this->view_data['news'] = Post::where('type', '=', 'news')->orderBy('id', 'desc')->paginate(4);
                    break;
                case 'contactus':
                    $this->view_data['contactSection'] = Post::where('slug', '=', 'contact-us')->first();
                    break;

                case 'prescription-categories':
                    $this->view_data['consultOnlineBanner'] = Post::where('slug', '=', 'consult-online')->first();
                    $this->view_data['departments'] = CategoryDepartment::orderBy('id', 'desc')->get();
                    break;
                case 'consult':
                    $this->view_data['packages'] = PackageList::all();
                    $this->view_data['pharmacists'] = PharmacistUser::all();
                    $this->view_data['departments'] = CategoryDepartment::orderBy('id', 'desc')->get();
                    break;
                case 'login-page':
                    break;
                case 'prescription-option':
                    break;

                default:
                    break;

            }
            $seo = SeoTool::all();
            foreach ($seo as $s)
                if ($s->url == $slug) {
                    return view('frontend.pages.' . $slug, $this->view_data, compact('s'));
                }

            return view('frontend.pages.' . $slug, $this->view_data);
        }
        // 3. No page exist (404)
        return view('frontend.pages.404', $this->view_data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
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
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function contact(Request $request)
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
            'content' => Input::get('message'),
            'logo' => $this->view_data['site'],

        ];

        Mail::send('frontend.email.contact', $vars, function ($message) use ($vars) {

            $message->to([$vars['email'], config('app.admin_email')], 'Person');
            $message->subject('New message from contact form');

        });
        Session::flash('message', 'Thanks for contacting us!');
        return redirect('/contactus');
    }

    public
    function destroy($id)
    {
        //
    }

}
