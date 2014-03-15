<?php

class Teil4Controller extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('teil4.index', array(
				"entries" => BlogEntry::all()
		));
	}

	public function formular()
	{
		return View::make('teil4.formular');
	}

	public function speichern()
	{
		$validator = Validator::make(Input::all(), BlogEntry::$rules); 
		if ($validator->fails())
		{
			return Redirect::action('Teil4Controller@formular')
				->withInput()
				->withErrors($validator);
		} else {
			$user = BlogEntry::create(Input::all());
			$user->save();
			return Redirect::action('Teil4Controller@index');
		}
	}

}