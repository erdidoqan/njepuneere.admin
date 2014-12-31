<?php
//auth part
Route::post('/login' , "AuthController@login");
Route::get('/logout' , "AuthController@logout");
Route::get('/' , "PageController@home");

//page controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/dashboard' , "PageController@dashboard");
	Route::get('/create-comp' , "PageController@create_comp");
	Route::get('/all_ins' , "PageController@all_ins");
	Route::get('/all_ins/create-job/{id}' , "PageController@create_job");
	Route::get('/all_ins/create-jobinfo/{id}' , "PageController@create_jobinfo");
	Route::get('/all_ins/preview/{sirket_id}' , "PageController@preview");
	Route::get('all_ins/profile_ins/{id}' , "PageController@profil");
	Route::get('logo-update/{id}', "PageController@logo_up");
	Route::get('/all_app', "PageController@allApp");
	Route::get('/applicant/{id}', "PageController@applicant");
	Route::get('/birey_user/{id}/{ads_id}', "PageController@BireyProfile");
});

//post controller
Route::group(array('before' => 'auth'), function(){
	Route::post('/sirketkayit' , "PostController@SirketUser");
	Route::post('/all_ins/create-job/ads_store/{sirket_id}' , "PostController@ads_store");
	Route::post('/all_ins/create-job/adsinfo_store/{sirket_id}' , "PostController@adsinfo_store");
	Route::post('/logo_up/{id}' , "PostController@logo_up");
	Route::post('/crop/{id}', "PostController@crop");
	Route::post('/delete/company/{id}',"PostController@deletecom");
});