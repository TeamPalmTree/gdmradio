<?php

class Controller_Contact extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->section->name = 'Contact';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('contact/index');
        // set template vars
        $this->template->title = 'Contact';
        $this->template->section->body = $view;
	}

}
