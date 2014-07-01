<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
Route::get('home', 'HomeController@showWelcome');
Route::get('about', 'AboutController@about');
Route::get('contact', 'ContactController@contact');
Route::get('portfolio', 'PortfolioController@overzicht');
dimi
site/user/{gebruikersnaam}/edit

Route::group(array('prefix' => 'user/{username}'), function(){
	Route::get('/')

	Route::get('edit')-
}); dimi
*/
	Route::get('/user/{username}', 'ProfileController@user');

/** authenticated group **/
Route::group(array('before' => 'auth'), function() 
{	/** |CSRF cross over request direc...  protection **/
	Route::group(array('before' => 'csrf'), function() 
		{

		Route::post('/account/change-password',  array(
			'as' =>'change-password-post', 
			'uses'=> 'AccountController@postChangePassword'));
		});

		/*|change password(GET)*/
		Route::get('/account/change-password',  array(
			'as' =>'change-password', 
			'uses'=> 'AccountController@getChangePassword'));

		/*|sign out (GET)*/
			Route::get('/account/sign-out', array(
			'as' => 'sign-out',
			'uses' => 'AccountController@getSignOut',
	));	
Route::get('pages/{id}/edit-page', 'HomeController@editor');

	Route::resource('posts', 'PostController');	
	Route::resource('quick', 'QuickscanController');	
/*page edit*/
			Route::resource('editor', 'EditpageController');
});
Route::group(array('before' => 'guest'), function()
{

/** |CSRF  protection **/
	Route::group(array('before' => 'csrf'), function()
	{
				/** |create POST**/
			Route::post('/account/create',  array('as' =>'create-post', 'uses'=> 'AccountController@postCreate'));
				/** |Post sign-in, root 4 submit**/
			Route::post('/account/sign-in',  array('as' =>'sign-in-post', 'uses'=> 'AccountController@postSignIn'));
			/** |Forgot Password(Post)**/
			Route::post('/account/forgot-password',  array('as' =>'forgot-password-post', 'uses'=> 'AccountController@postForgotPassword'));
	});
	/** |Forgot Password(get)**/
Route::get('/account/forgot-password',  array('as' =>'forgot-password', 'uses'=> 'AccountController@getForgotPassword'));
Route::get('/account/recover/{code}', array('as' => 'account-recover', 'uses' => 'AccountController@getRecover'));
/** |Get sign-in allow the users to see the form**/
Route::get('/account/sign-in',  array('as' =>'sign-in', 'uses'=> 'AccountController@getSignIn'));

			/** |create account**/
		Route::get('/account/create',  array('as' =>'create', 'uses'=> 'AccountController@getCreate'));
		Route::get('/account/activate/{code}',  array('as' =>'account-activate', 'uses'=> 'AccountController@getActivate'));
	});
	

Route::get('activate', function()
{
     View::make('emails/auth/activate');
});

	Route::get('/', 'HomeController@all');
	Route::get('nieuwsoverzicht', 'HomeController@overview');
	Route::get('pagina/{category}', 'HomeController@basicpage');

	Route::get('nieuws/{posts_slug}', 'HomeController@slug');
	Route::post('search', 'HomeController@search');
Route::get('quick', 'QuickscanController@getQuickscan');
Route::get('contact', 'ContactController@contact');
Route::get('index', 'AdminController@index');
Route::get('toegankelijkheid', function(){ return View::make('pages/toegankelijkheid'); });
/*Route::get('beperkingen', function(){ return View::make('pages/beperkingen'); });
*/Route::get('diensten', function(){ return View::make('pages/diensten'); });
Route::get('referenties', function(){ return View::make('pages/referenties'); });/*Database load.. make a controller*/
Route::get('over', function(){ return View::make('pages/over'); });
Route::get('nieuws', function(){ return View::make('pages/nieuws'); }); /*Database load.. controller*/
Route::get('/{name}', function($name)
{
    return $name.' Bestaat niet';

});

//	Route::get('user/{username}', 'HomeController@test');
// Route::get('contact',  function()
// {
//     return View::make('pages.contact');
// });

 