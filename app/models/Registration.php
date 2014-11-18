<?php

class Registration extends \Eloquent {
    
    protected $table = 'restorallye_registrations';
    
	protected $fillable = ['user_ID', 'user_name', 'user_firstname', 'user_mail', 'event_ID', 'groupname', 'peopleNumber'];

	public function events(){
		return $this->belongsTo('MyEvent');
	}
    public function users(){
		return $this->belongsTo('User');
	}
}