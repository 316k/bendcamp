<?php defined('SYSPATH') or die('No direct script access.');

return array(

	/**
	 * Custom functions and filters
	 *
	 *     'functions' => array(
	 *         'my_method' => array('MyClass', 'my_method'),
	 *     ),
	 */
	'functions' => array(
	    'logged' => array('Auth::instance()', 'logged'),
	),
	'filters' => array(
	    'translate' => array('I18n', 'get'),
	),

);
