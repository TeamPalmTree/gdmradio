<?php

class Controller_Shows extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Shows';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('shows/index');
        // set template vars
        $this->template->title = 'Shows';
        $this->template->section->body = $view;
	}

}
