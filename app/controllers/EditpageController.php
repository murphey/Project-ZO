<?php

class EditpageController extends BaseController{
	
	public function index(){ 
		$posts = Pages::orderBy('created_at')->paginate(4);

		return View::make('admin.posts.edit-pages-index')->with('posts', $posts);
	}

	public function update($id){
				$ur = Pages::find($id);
				$url = $ur->category;		
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Pages::$rules);
		if($v->passes()){
			Pages::find($id)->update($input);
			return Redirect::to('pagina/'.$url);
		}
		return Redirect::back()->withErrors($v);
	}
}

