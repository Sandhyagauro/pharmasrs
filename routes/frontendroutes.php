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

//Pages
Route::match(['get','post'],'/{slug}','Frontend\PagesController@index')->where('slug','.*');

