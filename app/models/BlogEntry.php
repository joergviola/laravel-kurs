<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class BlogEntry extends Eloquent {

	protected $table = 'blog';
	
	protected $fillable = array('text', 'title');
	
	public static $rules = array(
			'title' => 'required|min:5',
			'text' => 'required'
	);
	
	// title
	// text	
}