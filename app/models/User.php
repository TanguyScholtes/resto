<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    
    protected $fillable = ['name', 'firstname', 'company', 'address-street', 'address-number', 'address-postalCode', 'address-town', 'phone', 'fax', 'email', 'password', 'newsletter'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    
    public function comments(){
		return $this->hasMany('Comment');
	}
    public function registrations(){
		return $this->hasMany('Registration');
	}
}
