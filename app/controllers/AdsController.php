<?php

class AdsController extends BaseController {

	public function active($id)
	{
		AdsInfo::where('id','=',$id)->update(array('active' => 1));

		return Redirect::back()->with('success', "Now job is active.");
	}

	public function passive($id)
	{
		AdsInfo::where('id','=',$id)->update(array('active' => 0));

		return Redirect::back()->with('warning', "Now job is passive.");
	}

	public function delete($id)
	{
		
		$ads = Ads::findOrFail($id);
        $ads->delete();
        $AdsInfo = AdsInfo::findOrFail($id);
        $AdsInfo->delete();

        return Redirect::to('jobs')->with('error',"Job was successfully deleted.");
	}

	public function EditCom()
	{
		$inputs = Input::all();
		$ads = AdsInfo::find($inputs['pk']);
		$ads->$inputs['name'] = $inputs['value'];
		$ads->save();
		return Redirect::back();
	}

	public function EditAds()
	{
		$inputs = Input::all();
		$ads = Ads::find($inputs['pk']);
		$ads->$inputs['name'] = $inputs['value'];
		$ads->save();
		return Redirect::back();
	}

	public function EditDesc($id)
	{
		$inputs = Input::all();
		$ads = AdsInfo::find($id);
		$ads->job_desc = $inputs['job_desc'];
		$ads->save();
		return Redirect::back();
	}

	public function EditQua($id)
	{
		$inputs = Input::all();
		$ads = AdsInfo::find($id);
		$ads->qua = $inputs['qua'];
		$ads->save();
		return Redirect::back();
	}
}