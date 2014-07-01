<?php

class AccountController extends BaseController{
	public function getSignIn(){
		return View::make('admin.admin-pages.signin');
	}	
	public function postSignIn(){
		$validator = Validator::make(Input::all(),
				array(
				'email' => 'required|email',
				'password' => 'required'
				)				
			);
		if($validator->Fails()){
			//redirect to sign in
			return Redirect::route('sign-in')
			->withErrors($validator)
			->withInput();
		}
		else{
			$remember = (Input::has('remember')) ? true : false;
			//Attempt user sign in
			$auth= Auth::Attempt(array(
					'email' => Input::get('email'),
					'password' => Input::get('password'),
					'user_level' => 1 //activate


				), $remember);
			if($auth){
				//Redirect to the intended page
				return Redirect::intended('contact');
			}
			else{
						return Redirect::route('sign-in')
		->with('global', 'E-mail/wachtwoord fout, of uw account is niet geactiveert');
			}
		}
		return Redirect::route('signin')
		->with('global', 'Poging tot inloggen mislukt! Heeft u uw account al geactiveert?');
	}
		public function getSignOut(){
			Auth::logout();//static methode
			return Redirect::To('contact');
		}
	public function getCreate(){
		return View::make('admin.admin-pages.create'); 
	}
	public function postCreate(){

		$validator = Validator::make(Input::all(), 
			array(
					'email' => 'required|max:50|email|unique:users', 
				   'name' => 'required|max:50|min:3|unique:users',
					'password' => 'required|min:6 ',
					'password_again' => 'required|same:password'
				)

			);
		print_r(Input::all());
			if ($validator->fails())
				{

				return Redirect::route('create')
				->withErrors($validator)
				->withInput();

				}
				else{
						$email    = Input::get('email');
						$name 	  = Input::get('name');
						$password = Input::get('password');
						//activation code
						$code = str_random(60);
						$user = User::create(array(
							'email' => $email,
							'admin_name' => $name,
							'password' => Hash::make($password),
							'code' => $code,
							'user_level' => 0 //activate


							));
						if($user){/*print_r(Input::all());*/
							//return mail
							Mail::send('emails.auth.activate', array('link' =>URL::route('account-activate', $code),'admin_name' => $name), function($message) use ($user){  
								$message->to($user->email, $user->admin_name)->subject('Activeer uw account!');
							});

							return Redirect::To('contact')
							->with('global', 'Uw account is geactiveert! we hebben u een mail verzonden');
						}
					}

	}
	public function getActivate($code){
		$user = User::where('code', '=', $code)->where('user_level', '=', 0);
		
		if($user->count()){
			$user = $user->first();
				echo '<pre>jj', print_r($user), '</pre>';
				$user->user_level = 1;
				$user->code = ''; //empty the code, set userlevel to 1 set user level to 2 for admin

				if($user->save()){
					return Redirect::To('contact')->with('global', 'Geactiveert, u kunt nu inloggen');
				}
		}
		return Redirect::To('contact')->with('global', 'We konden uw account niet activeren. Probeer het nogmaals');
	} 
	public function getChangePassword(){
		return View::make('admin.admin-pages.password');
	}	
	public function postChangePassword(){
			$validator = Validator::make(Input::all(),
				array(
				'old_password' =>  'required',
				'password' => 'required|min:6',
				'password_again' => 'required|same:password'
				)				
			);
			if($validator->fails()){
				//
				return Redirect::route('change-password')
				->withErrors($validator);
			}
			else{
				// change password elequent /find  plug data from table
				$user = User::find(Auth::user()->id);

				$old_password = Input::get('old_password');
				$password = Input::get('password');

				if(Hash::check($old_password, $user->getAuthPassword()))
				{
					//password user provided matches!
					$user->password = Hash::make($password);
					if($user->save()){
						return Redirect::To('contact') //change later
						->with('global', 'Uw wachtwoord is gewijzigd.');
					}
				}
			}
			return Redirect::route('change-password')
			->with('global', 'Uw wachtwoord kon niet gewijzigd worden!');

	}
	public function  getForgotPassword(){
		return View::make('admin.admin-pages.forgot');
	}	
	public function postForgotPassword(){
		$validator = Validator::make(Input::all(), array(
			'email' => 'required|email'
			)
		);
		if($validator->fails())
		{
			return Redirect::route('forgot-password')
			->withErrors($validator)
			->withInput(); //keep email adress in field
		}
		else{
			//change password
			$user = User::where('email', '=', Input::get('email'));
			if($user->count()){
				$user 				 = $user->first(); //getting user
				//Generate a new code and password
				$code 				 = str_random(60);
				$password            = str_random(10);

				$user->code 		 = $code; //send to database record
				$user->password_temp = Hash::make($password);
				if($user->save()){

					Mail::send('emails.auth.forgot', array('link' => URL::route('account-recover', $code), 'admin_name' => $user->admin_name, 'password' => $password), function($message) use ($user){
						$message->to($user->email, $user->admin_name)->subject('Uw nieuwe wachtwoord');
					});
							return Redirect::To('contact')
							->with('global', 'We hebben u zojuist een nieuw wachtwoord 	.')
					; //home link make $link and admin.. make $admin
				}
			}
		}
		return Redirect::route('forgot-password')
		->with('global', 'Kon de vereiste voor een nieuwe wachtwoord niet uitvoeren.');
	}
	public function getRecover($code){
		$user = User::where('code', '=', $code)
		->where('password_temp', '!=', '');
		if($user->count()){
			$user =$user->first(); //current record

			$user->password = $user->password_temp;
			$user->password_temp = '';
			$user->code = '';

			if($user->save()){
			return Redirect::To('contact')
			->with('global', 'Uw account is hersteld en u kunt nu inloggen met uw nieuwe wachtwoord.');
			}

		}
		else{
			return Redirect::To('contact')
			->with('global', 'Uw account kon niet hersteld worden.');
		}

	}
}	