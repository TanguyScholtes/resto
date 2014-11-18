<?php

class Resto extends \Eloquent {
    
    protected $table = 'restorallye_restos';
    
	protected $fillable = ['name', 'address-street', 'address-number', 'address-postalCode', 'address-town', 'url', 'image'];
    
    public function events(){
		return $this->belongsTo('MyEvent');
	}
}