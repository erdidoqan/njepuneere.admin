<?php

class PostController extends BaseController {

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

			$sirketName = Input::get('com_name');
			$sirketId = $sirket_user->id;
			return Redirect::to('/all_ins/profile_ins/'.$sirketId)->with('success', '<b>'.ucwords($sirketName).'</b>'. " ".' institution has been created. Now you can create a new job.');
		}
		return Redirect::to('create-comp')->withErrors($v);
	}

	public function ads_store($sirket_id)
	{
		$input = Input::all();
		$rules = array('position' => 'required','sector'=>'required','area'=>'required');
		$v = Validator::make($input,$rules);
		if ($v->passes())
		{
			$ads = new Ads;
			$ads->wanted_pos = Input::get('position');
			$ads->sector = Input::get('sector');
			$ads->bus_area = Input::get('area');
			$ads->position = Input::get('pos');
			$ads->working_style = Input::get('style');
			$ads->exp = Input::get('exp');
			$ads->degree = Input::get('degree');
			$ads->gender = Input::get('gender');
			$ads->user_id = $sirket_id;
			$ads->save();

			return Redirect::to('/all_ins/create-jobinfo/'.$sirket_id);
		}
		return Redirect::back()->withErrors($v);
	}

	public function adsinfo_store($sirket_id)
	{
		$sirket = SirketUser::find($sirket_id);
		$input = Input::all();
		$rules = array('ads_name'=>'required','work_place'=>'required','job_desc'=>'required','qua'=>'required');
		$v = Validator::make($input,$rules);

		if ($v->passes())
		{
			$adsinfo = new AdsInfo;
			$adsinfo->com_name = $sirket->com_name;
			$adsinfo->logo = $sirket->logo;
			$adsinfo->ads_name = Input::get('ads_name');
			$adsinfo->ref_code = Input::get('ref_code');
			$adsinfo->languages = Input::get('languages');
			$adsinfo->number_of_staff = Input::get('number_of_staff');
			$adsinfo->only = Input::get('only',0);
			$adsinfo->disabled = Input::get('disabled',0);
			$adsinfo->transmit = Input::get('transmit',0);
			$adsinfo->work_place = Input::get('work_place');
			$adsinfo->gender = Input::get('gender');
			$adsinfo->job_desc = Input::get('job_desc');
			$adsinfo->qua = Input::get('qua');
			$adsinfo->rel_date = Input::get('rel_date');
			$adsinfo->pub_time = Input::get('pub_time');
			$adsinfo->user_id = $sirket_id;
			$adsinfo->save();

			return Redirect::to('/all_ins/preview/'.$sirket_id);
		}
		return Redirect::back()->withErrors($v);
	}

	public function logo_up($id)
	{
		$sirket = SirketUser::find($id);
		$input = Input::all();
		$rules = array ('logo' => 'required|image|max:1000');
		$v = Validator::make($input,$rules);

		if($v->passes())
		{
			if(Input::hasFile('logo')){
				$logo = Input::file('logo');
		        $filename  = $sirket->com_name.'-'.$sirket->id. '.'.$logo->getClientOriginalExtension();
		        $path = "/var/www/institutional.njepuneere/public/img/logo/".$filename;
	            Image::make($logo->getRealPath())->save($path);
		        $logo = 'img/logo/'.$filename;
		        $logo = SirketUser::where('id','=',$id)->update(array('logo' => $logo));

		        Session::put('modal', 'true');
		    } else {
		    	$path = Input::get('img_bckp');
		    }
	        Session::put('logo', $path);
	        return Redirect::back();
	    }
	    return Redirect::back()->withErrors($v);
	}

	public function crop($id)
	{
		Session::forget('modal');
		$img = Session::get('logo');

		$logo = Image::make($img);
		$logo->crop(intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')));
		$logo->save($img);
		return Redirect::back();
	}

	public function deletecom($id)
	{
		$postComName = Input::get('com_name');
		$company = SirketUser::find($id);
		$companyName = $company->com_name;

		$ads = AdsInfo::where('com_name','=', $companyName)->first();

		if (is_null($ads)) {

			if ($postComName == $companyName) {
				$company->delete();
				return Redirect::to('/all_ins')->with('error', '<b>'.ucwords($companyName).'</b>'." ".'institution was successfully deleted.');	
			} else {
				return Redirect::back()->with('error', 'institution name was wrong!!');
			}
			
		}else{
			return Redirect::back()->with('error', 'institution have some ads. Firstly delete them!!');
		}
	}


}