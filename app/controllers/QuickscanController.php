<?php

class QuickscanController extends BaseController{
	public function getQuickscan(){
		return View::make('admin.quickscan.quick-form');
		
	}	
	public function postQuickscan(){
		$quest = Quest::orderBy('questions')->paginate(6);

				return View::make('admin.quickscan.quick-form')->with('quest', $quest);


	}
	public function store(){
		$input = Input::all();

		$v = Validator::make($input, Quickscan::$rule);
		if($v->passes()){
			$post = new Quickscan;
			$post->user_email = Input::get('user_email');
			$post->user_school = Input::get('user_school');
			$post->q_1 = $_POST['1'];
			$post->q_2 = $_POST['2'];
			$post->q_3 = $_POST['3'];
			$post->q_4 = $_POST['4'];
			$post->q_5 = $_POST['5'];
			$post->q_6 = $_POST['6'];

		$post->save();

			return Redirect::route('posts.index');
		}
		return Redirect::back()->withErrors($v);
	}
	public function update($id){
		$inputt = array_except(Input::all(), '_method');
		$v = Validator::make($inputt, Pages::$rules);
		if($v->passes()){
			Pages::find($id)->update($inputt);
			return Redirect::route('posts.index');
		}
		return Redirect::back()->withErrors($v);
	}
}