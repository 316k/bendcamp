<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

    public $template = NULL;

    /**
	 * Loads the template [View] object.
	 */
	public function before()
	{
	    if ($this->template === NULL)
	    {
	        $this->template = strtolower($this->request->controller());

	        if ($this->request->action() !== 'index')
	        {
	            $this->template .= '/' . $this->request->action();
	        }
	    }

		if ($this->auto_render === TRUE)
		{
			// Load the template
			$this->template = Twig::factory($this->template, array('auth' => Auth::instance()));
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template->render());
		}

		parent::after();
	}

}
