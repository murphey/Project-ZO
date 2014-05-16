<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		//was standaard if ( ! is_null($this->layoutname))
		// {
		// 	$this->layout = View::make($this->layoutname);
		// }
	}

}