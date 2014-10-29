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

	public function create_job()
	{
		return View::make('dashboard.job');
	}
	
}
