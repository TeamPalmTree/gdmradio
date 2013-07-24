<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.6
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Contribute extends Controller_TeamPalmTree
{

    public function before()
    {
        $this->section = 'contribute';
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('contribute/index');
        // set template vars
        $this->template->title = 'Index';
        $this->template->content = $view;
	}

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
