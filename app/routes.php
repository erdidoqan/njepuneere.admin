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
	
	Route::get('/users' , "PageController@users");
	Route::get('/users/{adi}/{id}', "PageController@user")->where(['id' => '[0-9]+', 'adi' => '[0-9a-z-]+']);

	Route::get('/jobs' , "PageController@jobs");
	Route::get('/jobs/job/{id}' , "PageController@job");
	Route::get('/jobs/job/active/{id}' , "PageController@active");
	Route::get('/jobs/job/passive/{id}' , "PageController@passive");

	Route::get('/all_ins/create-job/{id}' , "PageController@create_job");
	Route::get('/all_ins/create-jobinfo/{id}' , "PageController@create_jobinfo");
	Route::get('/all_ins/preview/{sirket_id}' , "PageController@preview");
	Route::get('all_ins/profile_ins/{id}' , "PageController@profil");
	Route::get('all_ins/message/{id}', "MessageController@InsSend");

	Route::get('logo-update/{id}', "PageController@logo_up");
	Route::get('/all_app', "PageController@allApp");
	Route::get('/applicant/{id}', "PageController@applicant");
	Route::get('/birey_user/{id}/{ads_id}', "PageController@BireyProfile");
	Route::get('/logo-update/{id}/upallads', "PageController@upallads");

	//mesaj rotalari
	Route::post('/send-message/{id}', "MessageController@send");

	Route::get('/mail/send', "EmailController@Send");
	Route::post('/mailer', "EmailController@SendPost");
	Route::get('/add-all-email', "PageController@allmail");

	Route::get('/mail/inbox', "EmailController@MailInbox");
	//Ads setting

	Route::get('/jobs/job/delete/{id}', "AdsController@delete");
	Route::get('/jobs/job/active/{id}' , "AdsController@active");
	Route::get('/jobs/job/passive/{id}' , "AdsController@passive");
	//Route::post('job/quick_update' , "AdsController@EditCom");

	Route::post('job/quick_update', array('as' => 'quick_update', 'uses' => 'AdsController@EditCom'));
	Route::post('job/ads_update', array('as' => 'ads_update', 'uses' => 'AdsController@EditAds'));
	Route::post('/job/desc/{id}', "AdsController@EditDesc");
	Route::post('/job/qua/{id}', "AdsController@EditQua");
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