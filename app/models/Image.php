<?php

class Image extends \Eloquent {
    
    protected $table = 'restorallye_images';
    
	protected $fillable = ['slug', 'event_ID'];
    
    public function users(){
		return $this->belongsTo('Event');
	}
}