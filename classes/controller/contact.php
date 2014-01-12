<?php

class Controller_Contact extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Contact';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('contact/index');
        // set template vars
        $this->template->title = 'Contact';
        $this->template->content = $view;
	}

}
