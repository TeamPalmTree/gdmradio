<?php

class Controller_Listen extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->body->name = 'Listen';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('listen/index');
        // set template vars
        $this->template->title = 'Listen';
        $this->template->body->content = $view;
	}

}
