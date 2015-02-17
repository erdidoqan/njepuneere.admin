<?php

class AdsController extends BaseController {

	public function delete($id)
	{
		
		$ads = Ads::findOrFail($id);
        $ads->delete();
        $AdsInfo = AdsInfo::findOrFail($id);
        $AdsInfo->delete();

        return Redirect::to('jobs')->with('success',"Job was successfully deleted.");
	}


}