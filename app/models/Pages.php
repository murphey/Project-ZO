<?php

class Pages extends Eloquent{
	protected $guarded = array();
	public static $rules = array(
     'page_title' => 'required',
     'page_content' => 'required|unique:pages'
		);
	public function user(){
		return  $this->belongsTo('User', 'category');
	}
	
	
}
  