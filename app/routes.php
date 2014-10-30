<?php
//auth part
Route::post('/login' , "AuthController@login");
Route::get('/logout' , "AuthController@logout");
Route::get('/' , "PageController@home");

//page controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/dashboard' , "PageController@dashboard");
	Route::get('/create-comp' , "PageController@create_comp");
	Route::post('/sirketkayit' , "PageController@SirketUser");
	Route::get('/create-job' , "PageController@create_job");
});

