<?php

class ContactController extends BaseController 
{
	public function contact()
	{ /*Mail::send('emails.auth.test', array('name' => 'murphey'), function($message){
			$message->to('murphey_business-boy@live.nl', 'murphey Sistina')->subject('test email');
		});
		*/
		return View::make('admin/admin-pages/admin-home');
	}
}