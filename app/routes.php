<?php

Route::get('/', function () {
	return View::make('index');
});

Route::group(array('prefix' => 'api/v1'), function()
{
	Route::post('account/signup','AccountController@signup');
	Route::get('account/session','AccountController@session');
	Route::post('account/login','AccountController@login');
	Route::get('account/logout','AccountController@logout');
	Route::get('test','AccountController@test');
});
