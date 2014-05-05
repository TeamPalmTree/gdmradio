<?php

class Controller_Shows extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->body->name = 'Shows';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('shows/index');
        // set template vars
        $this->template->title = 'Shows';
        $this->template->body->content = $view;
	}

}
