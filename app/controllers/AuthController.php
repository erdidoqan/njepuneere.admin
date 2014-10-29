<?php

class AuthController extends BaseController {


	public function login()
	{
		$input = Input::all();
		$rules = array('email' => 'required', 'password' => 'required');
		$v = Validator::make($input, $rules);
		if($v->passes())
		{
			$kimlik = array('email' => Input::get('email'), 'password' => Input::get('password'));
			if(Auth::attempt($kimlik)){
				return Redirect::to('dashboard');
			} else {
				return Redirect::back()->withErrors($v);
			}
		}
		return Redirect::back()->withErrors($v);
	}

	public function logout()
		{

			Auth::logout();
			return Redirect::to('/');
		}

}
