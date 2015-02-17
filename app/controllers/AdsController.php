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


}