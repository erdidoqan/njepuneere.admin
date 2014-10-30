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

	public function all_ins()
	{
		$company = SirketUser::all();
		return View::make('institution.all')->with('company',$company);
	}

	public function create_job($id)
	{
		$sirket_id = SirketUser::find($id)->id;
		return View::make('institution.job')->with('sirket_id',$sirket_id);
	}

	public function create_jobinfo($sirket_id)
	{
		$sirket = SirketUser::find($sirket_id);
		$sirket_id = SirketUser::find($sirket_id)->id;
		return View::make('institution.jobinfo')->with('sirket_id',$sirket_id)->with('sirket',$sirket);
	}
	
	public function preview($sirket_id)
	{
		$ads = Ads::where('user_id','=',$sirket_id)->orderBy('id','DESC')->take(1)->first();
		$adsInfo = AdsInfo::where('user_id','=', $sirket_id)->orderBy('id','DESC')->take(1)->first();
		return View::make('institution.jobpre')
		->with('sirket_id',$sirket_id)
		->with('ads',$ads)
		->with('adsInfo',$adsInfo);
	}

		
}
