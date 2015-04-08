<?php

class EmailController extends BaseController {

	public function send() {
		return View::make('dashboard.mailer');
	}

	public function allmail() {
		$allmail = BireyUser::lists('email');

		return Redirect::back()->with('mail', $allmail);

	}

	public function SendPost() {
		$mesaj = Input::get('mesaj');
		$alici = Input::get('alici');
		$konu = Input::get('konu');

		$input = Input::all();
		$rules = array ('mesaj' => 'required',
						'alici' => 'required');
		$v = Validator::make($input,$rules);



		if($v->passes())
		{
			$mails = new Emails;
			$mails->alici = $alici;
			$mails->mesaj = $mesaj;
			$mails->subject = $konu;
			$mails->save();

			$to = explode(';', $alici);

				foreach($to AS $person)
				{
					Mail::queue('emails.auth.reminder', array('mesaj' => $mesaj), function($mesaj) use ($person)
					{
					    $mesaj->to($person)->subject($konu);
					});
				}

			return  Redirect::back()
		                ->with('success', 
		                		'Mails was successfully sent to all recipients');
	    }else{
	    	return Redirect::back()
	    				->with('error', 'Feel all blank :)');
	    }
	
	}

	public function MailInbox() {
		return View::make('dashboard.inbox');
	}

}