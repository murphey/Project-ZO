<?php

class Advice extends Eloquent{
	protected $table = 'quickscan_advice';
    public function quickscan()
    {
        return $this->hasMany('Quickscan');
    }
	
}
  