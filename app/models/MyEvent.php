<?php

class MyEvent extends \Eloquent {
    
    protected $table = 'events';
    
	protected $fillable = ['location', 'date', 'places-remaining', 'places-total', 'resto1_ID', 'resto2_ID', 'resto3_ID', 'done'];

	public function restos(){
		return $this->hasMany('Resto');
	}
    public function registrations(){
		return $this->hasMany('Registration');
	}
}