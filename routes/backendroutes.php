<?php

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware'=>'auth'],function ()
{
    Route::get('/dashboard', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));

    Route::resource('menu','MenuController');
    Route::post('menu/save',['as'=>'admin.menu.save','uses'=>'MenuController@save']);
    Route::get('/menu/{id}/destroy',['as'=>'menu.destroy','uses'=>'MenuController@destroy']);

    Route::resource('/post','PostController');
    Route::get('/post/{id}/destroy',['as'=>'post.destroy','uses'=>'PostController@destroy']);

    Route::resource('/team','TeamController');
    Route::get('/team/{id}/destroy',['as'=>'team.destroy','uses'=>'TeamController@destroy']);

    Route::resource('/banner','BannerController');
    Route::get('/banner/{id}/destroy',['as'=>'banner.destroy','uses'=>'BannerController@destroy']);

    Route::resource('/department','DepartmentController');
    Route::get('/department/{id}/destroy',['as'=>'department.destroy','uses'=>'DepartmentController@destroy']);

    Route::resource('/news','NewsController');
    Route::get('/news/{id}/destroy',['as'=>'news.destroy','uses'=>'NewsController@destroy']);

    Route::get('/contact','ContactController@index');
    Route::get('/contact/{id}/destroy',['as'=>'contact.destroy','uses'=>'ContactController@destroy']);

    Route::resource('/package','PackageController');
    Route::get('/package/{id}/destroy',['as'=>'package.destroy','uses'=>'PackageController@destroy']);

    Route::resource('/site','SiteSettingController');

    Route::get('/consult/reply/{id}','CounselingController@reply');
    Route::post('/consult/reply',['as'=>'reply.prescription','uses'=>'CounselingController@replyPrescription']);
    Route::resource('/consult','CounselingController');

    Route::resource('users','UserController');
    Route::get('users/edit/{id}','UserController@edit');
    Route::post('users/edit/{id}/addRole',['as'=>'admin.users.addRole','uses'=>'UserController@addRole']);
    Route::post('users/edit/{id}/{role_id}',['as'=>'admin.users.revokeRole','uses'=>'UserController@revokeRole']);

    Route::resource('roles','RoleController');
    Route::post('roles/store',['as'=>'admin.roles.store','uses'=>'RoleController@store']);
    Route::get('roles/edit/{id}',['as'=>'admin.roles.edit','uses'=>'RoleController@edit']);
    Route::post('roles/edit/{id}/update',['as'=>'admin.roles.update','uses'=>'RoleController@update']);
    Route::post('roles/destroy/{id}',['as'=>'admin.roles.destroy','RoleController@destroy']);



});

