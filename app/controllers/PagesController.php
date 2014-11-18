<?php

class PagesController extends BaseController {

	public function home()
	{
		return View::make('pages.home');
	}
    
    public function about()
    {
        return View::make('pages.about');
    }
    
    public function login() 
    {
        return View::make('forms.users.connexion');
    }
    
    public function events()
    {
        return View::make('pages.event');
    }

}
