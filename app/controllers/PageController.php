<?php

class PageController extends BaseController {

	public function home()
	{
		return View::make('auth.login');
	}

	public function dashboard()
	{
		return View::make('dashboard.dashboard');
	}

	public function create_comp()
	{
		return View::make('dashboard.sirketkayit');
	}

	public function create_job()
	{
		return View::make('dashboard.job');
	}

	public function SirketUser()
	{
		$input = Input::all();
		$rules = array ('name' => 'required',
						'sname' => 'required',
						'email'=> 'required|unique:sirket_user|email');
		$v = Validator::make($input,$rules);

		if($v->passes())
		{
			$sirket_user = new SirketUser;
			$sirket_user->name = Input::get('name');
			$sirket_user->sname = Input::get('sname');
			$sirket_user->birthday = Input::get('birthday');
			$sirket_user->phone = Input::get('phone');
			$sirket_user->email = Input::get('email');
			$sirket_user->com_name = Input::get('com_name');
			$sirket_user->com_nipt = Input::get('com_nipt');
			$sirket_user->com_sector = Input::get('com_sector');
			$sirket_user->nr_emp = Input::get('nr_emp');
			$sirket_user->com_add = Input::get('com_add');
			$sirket_user->zip_code = Input::get('zip_code');
			$sirket_user->country = Input::get('country');
			$sirket_user->city = Input::get('city');
			$sirket_user->web_add = Input::get('web_add');
			$sirket_user->fax = Input::get('fax');
			$sirket_user->save();

			return Redirect::to('create-job')->with('sirket_user',$sirket_user);
		}
		return Redirect::to('create-comp')->withErrors($v);
	}

	public function ads_store($sirket_user)
	{
		 $input = Input::all();
		 $v = Validator::make($input, Ads::$rules);

		 if($v->passes()){
		 	$ads = new Ads;
		 	$ads->wanted_pos = Input::get('position');
		 	$ads->sector = Input::get('sector');
		 	$ads->bus_area = Input::get('area');
		 	$ads->position = Input::get('pos');
		 	$ads->working_style = Input::get('style');
		 	$ads->exp = Input::get('exp');
		 	$ads->degree = Input::get('degree');
		 	$ads->gender = Input::get('gender');
		 	$ads->user_id = $sirket_user->id;
		 	$ads->save();

		 	return Redirect::to('create_adsInfo')->with('sirket_user',$sirket_user);
		 }
		 return Redirect::to('ads_store')->withErrors($v);
	}
	
}
