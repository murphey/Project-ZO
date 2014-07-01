<?php

class AdminController extends BaseController 
{
	public function index()
	{ /*Mail::send('emails.auth.test', array('name' => 'murphey'), function($message){
			$message->to('murphey_business-boy@live.nl', 'murphey Sistina')->subject('test email');
		});
		*/
		return View::make('admin/posts/index');
	}
}