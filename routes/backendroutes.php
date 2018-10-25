<?php

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware'=>'auth'],function ()
{
    Route::get('/dashboard', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));

    Route::resource('menu','MenuController');
    Route::post('menu/store',['as'=>'admin.menu.store','uses'=>'MenuController@store']);
    Route::post('menu/save',['as'=>'admin.menu.save','uses'=>'MenuController@save']);

//    Route::resource('users','UserController');


});
