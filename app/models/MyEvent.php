<?php

class MyEvent extends \Eloquent {
    
    protected $table = 'restorallye_events';
    
	protected $fillable = ['location', 'date', 'places-remaining', 'places-total', 'resto1_ID', 'resto2_ID', 'resto3_ID', 'done', 'description'];

	public function restos(){
		return $this->hasMany('Resto');
	}
    public function registrations(){
		return $this->hasMany('Registration');
	}
    public function images(){
		return $this->hasMany('Image');
	}
}