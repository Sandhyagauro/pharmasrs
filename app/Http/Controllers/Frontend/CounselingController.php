<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CounselingInfo;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PackageList;
use App\Models\PharmacistUser;
use Illuminate\Http\Request;

use DB;
use Session;
use Auth;

class CounselingController extends Controller
{


    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $this->view_data['menus'] = Menu::orderBy('order', 'asc')->get();
        return view('frontend.pages.patient.register', $this->view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();

        try {
            $user = Auth::user();

            $info = new CounselingInfo();
            $info->user_id = $user->id;
            $info->category_department_id = $request->category_department_id;
            $info->pharmacist_id = $request->pharmacist_id;
            $info->package_id = $request->package_id;

            $package_info = PackageList::where('id', '=', $request->package_id)->first();

            $info->package_amount = $package_info->amount;
            $info->package_duration = $package_info->duration;
            $info->patient = $request->patient;
            $info->patient_name = $request->patient_name;
            $info->patient_age = $request->patient_age;
            $info->patient_gender = $request->patient_gender;
            $info->patient_relation = $request->patient_relation;
            $info->current_symptoms = $request->current_symptoms;
            $info->medical_history = $request->medical_history;
            $info->patient_query = $request->patient_query;
            $info->prescription = $request->prescription;
            $info->save();
            DB::commit();

            Session::flash('message', 'Form submitted Successfully');
            return redirect('consult');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
        }
    }

    public function getPharmacistList(Request $request)
    {
        $pharmacist_lists = PharmacistUser::where('category_department_id', '=', $request->category_department_id)->orderBy('id', 'desc')->get();
        $pharmacist_list_html = view('frontend.pages.ajaxConsult',compact('pharmacist_lists'))->render();
        return response()->json(['success' => true,'data' => ['pharmacist_list_html' => $pharmacist_list_html]], 200);
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
        dd($id);
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

    public function destroy($id)
    {
        //
    }

}
