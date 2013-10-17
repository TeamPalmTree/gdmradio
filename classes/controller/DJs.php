<?php

class Controller_DJs extends Controller_GDMRadio
{

    public function before()
    {
        $this->section = 'DJs';
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('DJs/index');
        // get DJs
        $view->DJs = Model_DJ::ordered();
        // set template vars
        $this->template->title = 'DJs';
        $this->template->content = $view;
	}

}
