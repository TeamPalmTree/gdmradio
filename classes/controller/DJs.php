<?php

class Controller_DJs extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->document->section_title = 'DJs';
    }

	public function action_index()
	{
        // create view
        $view = View::forge('DJs/index');
        // get DJs
        $view->DJs = Model_DJ::all();
        // set template vars
        $this->template->body->content = $view;
	}

}
