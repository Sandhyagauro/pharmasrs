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


Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/patient/dashboard',['as'=>'patient.dashboard','uses'=>'Frontend\PatientUserController@dashboard']);
Route::post('/patient/dashboard/{id}/update',['as'=>'patient.update_profile','uses'=>'Frontend\PatientUserController@updateProfile']);
Route::post('/patient/login',['as'=>'patient.login','uses'=>'Frontend\PatientUserController@login']);
Route::get('/patient/logout',['as'=>'patient.logout','uses'=>'Frontend\PatientUserController@logout']);
Route::resource('/patient','Frontend\PatientUserController');

Route::post('/pharmacist/login',['as'=>'pharmacist.login','uses'=>'Frontend\PharmacistUserController@login']);
Route::get('/pharmacist/dashboard',['as'=>'pharmacist.dashboard','uses'=>'Frontend\PharmacistUserController@dashboard']);
Route::resource('/pharmacist','Frontend\PharmacistUserController');

Route::get('/counsel/pharmacist_list',['as'=>'counsel.pharmacist_list','uses'=>'Frontend\CounselingController@getPharmacistList']);
Route::resource('/counsel','Frontend\CounselingController');
//Pages
Route::match(['get','post'],'/{slug}','Frontend\PagesController@index')->where('slug','.*');

