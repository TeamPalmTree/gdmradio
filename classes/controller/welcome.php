<?php

class Controller_Welcome extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Home';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('welcome/index');
        // set recent posts
        $view->posts = Model_Post::recent();
        // set template vars
        $this->template->section->body = $view;
	}

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
