<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layoutname = 'layout';

	public function showWelcome()
	{
		$this->setupLayout();
		$this->layout->content = View::make('about');
		$this->layout->footer = View::make('footer');

	}

	public function all()
	{
		$posts = Post::orderBy('created_at', 'posts_desc')->paginate(2);
		return View::make('pages.home')->with('posts', $posts);
	}	
	public function slug($slug)
	{

		$post = Post::where('posts_slug', $slug)->first();

		$date = $post->created_at;
		setlocale(LC_TIME, 'Europe/Amsterdam');
		$date = $date->formatlocalized('%A %d %B %Y');

		return View::make('pages.post')->with('post', $post)->with('date', $date);
	}
	public function search(){
		$input = Input::get('search');
		$results = Post::where('posts_content', 'LIKE', '%'.$input.'%')->get();

		return View::make('pages.search')->with('results', $results);
	}

}