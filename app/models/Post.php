<?php

class Post extends Eloquent{
	protected $guarded = array();
	public static $rules = array(
     'posts_title' => 'required|unique:posts',
     'posts_content' => 'required'
		);
	public function user(){
		return  $this->belongTo('user', 'id');
	}
	
}