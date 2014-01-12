<?php

class Controller_Listen extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Listen';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('listen/index');
        // set template vars
        $this->template->title = 'Listen';
        $this->template->content = $view;
	}

}
