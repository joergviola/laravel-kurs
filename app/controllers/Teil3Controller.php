<?php

class Teil3Controller extends BaseController {

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

	public function formular()
	{
		return View::make('teil3.formular');
	}

	public function speichern()
	{
		$validator = Validator::make(Input::all(), array(
				'title' => 'required|min:5',
				'text' => 'required'
		));		
		if ($validator->fails())
		{
			return Redirect::action('Teil3Controller@formular')
				->withInput()
				->withErrors($validator);
		}		
		return Redirect::action('Teil3Controller@danke');
	}

	public function danke()
	{
		return View::make('teil3.danke');
	}

}