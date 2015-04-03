<?php

class MessageController extends BaseController {

	public function InsSend($id){
		$sirket = SirketUser::find($id);
		return View::make('institution.message')->with('sirket',$sirket);
	}

	public function send($id)
	{
		$input = Input::all();
		$sirket = SirketUser::find($id);

		$rules = array ('konu' => 'required',
						'mesaj' => 'required');
		$v = Validator::make($input,$rules);

		if($v->passes())
		{
			$message = new Message;
			$message->sirket_id = $id;
			$message->birey_id = "1";
			$message->ads_id = "1";
			$message->com_name = "System";
			$message->ads_name = "System";
			$message->message = Input::get('mesaj');
			$message->subject = Input::get('konu');
			$message->save();

			return Redirect::to('/all_ins/profile_ins/'.$id)->with('success', '<b>'.ucwords($sirket->com_name).'</b>'. " ".' successfully sended message!');
		}
		return Redirect::back()->withErrors($v);
	}

}