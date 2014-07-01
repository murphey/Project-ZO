<?php

class Quickscan extends Eloquent{
	protected $guarded = array();
	public static $rule = array(
     'user_email' => 'required|email|unique:quickscans'
  
		);
	public function user(){
		return  $this->belongsTo('Quest', 'quick_question_id');
	}
	
}
