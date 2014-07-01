<?php

class PostController extends AdminController 
{
	public function index(){ 
		$posts = Post::orderBy('created_at', 'DESC')->paginate(4);
		return View::make('admin.posts.index')->with('posts', $posts);
	}
	/**
	* show the form for creating a new resource
	*@return resource 
	**/
	public function create(){
		return View::make('admin.posts.create');

	} 
	/**
	* store a newly created resource in storage
	**/
	public function store(){
		$input = Input::all();
		$v = Validator::make($input, Post::$rules);
		$image = Input::file('image');
		$filename = $image->getClientOriginalName();

		$destinationPath = public_path().'/img/db';
		$uploadSuccess   = $image->move($destinationPath, $filename);
		var_dump($filename);

		if($v->passes()){
			$post = new Post;
			$post->posts_title = Input::get('posts_title');
			$post->posts_content = Input::get('posts_content');
			$post->posts_keyw = Input::get('posts_keyw');
			$post->posts_desc = Input::get('posts_desc');
			$post->posts_slug = Str::slug(Input::get('posts_title'));
			$post->posts_user_id = Auth::user()->id;
			$post->photo = $filename;
			$post->save();
						return Redirect::route('posts.index');

		}
		return Redirect::back()->withErrors($v);
	}
	/**
	* Display the specific resource
	* @param int $id
	* @return response post list
	**/
	public function show($id){
		$post = Post::find($id);
		$date = $post->created_at;
		setlocale(LC_TIME, 'Europe/Amsterdam');
		$date = $date->formatlocalized('%A %d %B %Y');
		return View::make('pages.nieuws')->with('post', $post)->with('date', $date);
	}
	/**
	* show the form for editing the specified resource
	* @param int $id
	* @return response
	**/
	public function edit($id){
		$post = Post::find($id);//find by id
		if(is_null($post)){
			return Redirect::route('posts.index');
		}
		return View::make('admin.posts.edit')->with('post', $post);

	}public function update($id){
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Post::$rules);
		if($v->passes()){
			Post::find($id)->update($input);
			return Redirect::route('posts.index');
		}
	return Redirect::back()->withErrors($v);
	}
		/**
	* Remove the specified resource from storage
	* @param int $id
	* @return response
	**/
	public function destroy($id){
		Post::find($id)->delete();
		return Redirect::route('posts.index');
	}
}