<?php

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::group(['namespace'=>'Frontend'],function(){
//    Route::get('/',['uses'=>'PagesController@index']);
//
//});

//contact form submit
Route::post('/contact',['as'=>'contactinfo.store','uses'=>'Frontend\PagesController@contact']);

Route::group(['middleware' => ['role:patient']], function () {
    Route::get('/patient/dashboard',['as'=>'patient.dashboard','uses'=>'Frontend\PatientUserController@dashboard']);
    Route::post('/patient/dashboard/{id}/update',['as'=>'patient.update_profile','uses'=>'Frontend\PatientUserController@updateProfile']);
    Route::post('/patient/login',['as'=>'patient.login','uses'=>'Frontend\PatientUserController@login']);
    Route::get('/patient/logout',['as'=>'patient.logout','uses'=>'Frontend\PatientUserController@logout']);
});
    Route::resource('/patient','Frontend\PatientUserController');

Route::group(['middleware' => ['role:pharmacist']], function () {
    Route::post('/pharmacist/login', ['as' => 'pharmacist.login', 'uses' => 'Frontend\PharmacistUserController@login']);
    Route::get('/pharmacist/dashboard', ['as' => 'pharmacist.dashboard', 'uses' => 'Frontend\PharmacistUserController@dashboard']);
    Route::post('/pharmacist/dashboard/{id}/update', ['as' => 'pharmacist.update_profile', 'uses' => 'Frontend\PharmacistUserController@updateProfile']);
    Route::get('/pharmacist/logout', ['as' => 'pharmacist.logout', 'uses' => 'Frontend\PharmacistUserController@logout']);
});
    Route::resource('/pharmacist', 'Frontend\PharmacistUserController');
Route::get('/counsel/pharmacist_list',['as'=>'counsel.pharmacist_list','uses'=>'Frontend\CounselingController@getPharmacistList']);
Route::post('/counsel/prescription',['as'=>'counsel.prescription.store','uses'=>'Frontend\CounselingController@storeCounselPrescription']);

Route::post('/counsel/prescription-list',['as'=>'counsel.prescription.store','uses'=>'Frontend\CounselingController@storeCounselPrescription']);
Route::get('/prescription-list/{type}',['uses'=>'Frontend\CounselingController@categoryPrescriptionList']);
Route::post('/prescription-list/{category_id}/search',['as'=>'prescription-list.search','uses'=>'Frontend\CounselingController@searchPrescription']);
Route::get('/prescription-list/{counseling_info_id}/detail',['as'=>'prescription-list.detail','uses'=>'Frontend\CounselingController@prescriptionDetail']);
Route::resource('/counsel','Frontend\CounselingController');

Route::get('/news-and-articles/{slug}','Frontend\NewsController@detailPage');


//Pages
Route::match(['get','post'],'/{slug}','Frontend\PagesController@index')->where('slug','.*');

