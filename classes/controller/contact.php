<?php

class Controller_Contact extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->document->section_title = 'Contact';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('contact/index');
        // set template vars
        $this->template->body->content = $view;
	}

}
