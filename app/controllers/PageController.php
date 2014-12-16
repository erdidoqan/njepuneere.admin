<?php

class PageController extends BaseController {

	public function home()
	{
		return View::make('auth.login');
	}

	public function dashboard()
	{
		$app = AllApply::orderBy('id','DESC')->paginate(5);
		return View::make('dashboard.dashboard')->with('app',$app);
	}

	public function create_comp()
	{
		return View::make('dashboard.sirketkayit');
	}

	public function all_ins()
	{
		$company = SirketUser::orderBy('id','DESC')->paginate(15);
		return View::make('institution.all')->with('company',$company);
	}
	public function all_app()
	{
		$company = SirketUser::orderBy('id','DESC')->paginate(15);
		return View::make('institution.app')->with('company',$company);
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

	public function profil($id)
	{
		$sirket = SirketUser::find($id);
		$adsInfo = AdsInfo::where('user_id','=',$id)->orderBy('id','DESC')->paginate(10);
		$app = AllApply::where('sirket_id','=',$id)->orderBy('id','DESC')->paginate(10);
		return View::make('institution.profil')->with('sirket',$sirket)->with('adsInfo',$adsInfo)->with('app',$app);
	}
	public function logo_up($id)
	{
		$data['logo'] = Session::get('logo');
		$data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		$sirket = SirketUser::find($id);
		return View::make('institution.logo')->with('sirket',$sirket)->with('data',$data);
	}
	public function allApp()
	{
		$app = AllApply::orderBy('id','DESC')->paginate(15);
		return View::make('user.apply')->with('app',$app);
	}
		
}
