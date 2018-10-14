<?php

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::group(['namespace'=>'Frontend'],function(){
//    Route::get('/',['uses'=>'PagesController@index']);
//
//});

Route::match(['get','post'],'/{slug}','Frontend\PagesController@index')->where('slug','.*');

