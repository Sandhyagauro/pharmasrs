<?php

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware'=>'auth'],function ()
{
    Route::get('/dashboard', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));

});
