<?php

class Quest extends Eloquent{
	protected $table = 'quickscan_questions';

    public function quickscan()
    {
        return $this->hasMany('Quickscan');
    }
	
}
  