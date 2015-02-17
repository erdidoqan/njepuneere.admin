<?php

class PageController extends BaseController {

	public function home()
	{
		return View::make('auth.login');
	}

	public function dashboard()
	{
		$app = AllApply::orderBy('id','DESC')->paginate(5);
		$user = BireyUser::orderBy('id','DESC')->paginate(5);
		$com = SirketUser::orderBy('id','DESC')->paginate(5);
		$ads = AdsInfo::orderBy('id','DESC')->paginate(5);

		return View::make('dashboard.dashboard')
		->with('app',$app)
		->with('user',$user)
		->with('com',$com)
		->with('ads',$ads);
	}

	public function create_comp()
	{
		return View::make('dashboard.sirketkayit');
	}

	public function users()
	{
		$users = BireyUser::orderBy('id','DESC')->paginate(25);
		return View::make('user.all')->with('users',$users);
	}

	public function jobs()
	{
		$jobs = AdsInfo::orderBy('active','DESC')->orderBy('id','ASC')->paginate(25);
		return View::make('jobs.all')->with('jobs',$jobs);
	}

	public function job($id)
	{
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);
		$app = AllApply::where('ads_id','=',$id)->orderBy('id','DESC')->paginate(15);
		
		return View::make('jobs.job')->with(compact('adsInfo', 'ads', 'app'));
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
		$sirketLogo = SirketUser::find($id)->logo;
		
		if(empty($sirketLogo)){
			return Redirect::to('/logo-update/'.$id)->with('error', "Plase firstly, you must update company logo!");
		}else{
			$sirket_id = SirketUser::find($id)->id;
			return View::make('institution.job')->with('sirket_id',$sirket_id);
		}
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
		$ads = Ads::where('user_id','=',$id)->first();
		if(empty($ads)){
			return View::make('institution.profil')->with(compact('sirket','adsInfo','app'));
		}else{
			$ads_id = $ads->id;
		}

		return View::make('institution.profil')
		->with(compact('sirket', 'adsInfo','app', 'ads_id'));
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

	public function applicant($id)
	{
		$ads = AdsInfo::find($id);
		$app = AllApply::where('ads_id','=',$id)->orderBy('id','DESC')->paginate(15);
		return View::make('institution.ads')->with(compact('ads', 'app'));
	}

	public function BireyProfile($id, $ads_id)
	{
		$cv = Apply::where('user_id','=',$id)->where('ads_id','=',$ads_id)->first();
		$Uexp = Exp::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Uedu = Edu::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Uintern = Intern::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Uforeign = Foreign::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Ucompe = Compe::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Ucert = Cert::where('cv_id','=',$cv->cv_id)->paginate(5);
		$Uref = Ref::where('cv_id','=',$cv->cv_id)->paginate(5);
		$user = BireyUser::find($id);

		return View::make('user.profile')
		->with(compact('user', 'Uexp', 'Uedu', 'Uintern', 'Uforeign', 'Ucompe','Ucert', 'Uref'));
	}

	public function mailer(){
		return View::make('dashboard.mailer');
	}

	public function upallads($id){
		$user = SirketUser::where('id','=',$id)->first();
		$logo = $user->logo;

		$logo = AdsInfo::where('user_id','=',$id)->update(array('logo' => $logo));

		return Redirect::back()->with('success', 'All ads change logos.');
	}
		
}
