<?php

class Controller_Shows extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->document->section_title = 'Shows';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('shows/index');
        // set template vars
        $this->template->body->content = $view;
	}

}
