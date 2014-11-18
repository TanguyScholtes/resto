<?php

class Comment extends \Eloquent {
    
    protected $table = 'comments';
    
	protected $fillable = ['commentary', 'user_ID', 'event_ID'];
    
    public function users(){
		return $this->belongsTo('User');
	}
}