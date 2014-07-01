<?php

class ProfileController Extends BaseController 
{
	public function user($username)
	{
		$user = User::where('admin_name', '=', $username);
		if($user->count()){
			//change later 
			$user = $user->first();
		return View::make('admin.admin-pages.user')
					->with('user', $user); //the user object can use for the blade
				
		
		}
 return App::abort(404);
	}

}
