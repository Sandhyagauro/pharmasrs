<?php

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware'=>'auth'],function ()
{
    Route::get('/dashboard', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));

    Route::resource('menu','MenuController');
    Route::post('menu/store',['as'=>'admin.menu.store','uses'=>'MenuController@store']);
    Route::post('menu/save',['as'=>'admin.menu.save','uses'=>'MenuController@save']);

    Route::resource('users','UserController');
    Route::get('users/edit/{id}','UserController@edit');
    Route::post('users/edit/{id}/addRole',['as'=>'admin.users.addRole','uses'=>'UserController@addRole']);
    Route::post('users/edit/{id}/{role_id}',['as'=>'admin.users.revokeRole','uses'=>'UserController@revokeRole']);

    Route::resource('roles','RoleController');
    Route::post('roles/store',['as'=>'admin.roles.store','uses'=>'RoleController@store']);
    Route::get('roles/edit/{id}',['as'=>'admin.roles.edit','uses'=>'RoleController@edit']);
    Route::post('roles/edit/{id}/update',['as'=>'admin.roles.update','uses'=>'RoleController@update']);
    Route::post('roles/destroy/{id}',['as'=>'admin.roles.destroy','RoleController@destroy']);

    Route::resource('banner', 'BannerController');


});

