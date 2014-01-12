<?php

class Controller_Posts extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Posts';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('posts/index');
        // set template vars
        $this->template->title = 'News';
        $this->template->section->body = $view;
	}

    public function action_view($id)
    {
        // create view
        $view = View::forge('posts/view');
        // set post on view
        $view->post = Model_Post::find($id);
        // set template vars
        $this->template->title = 'News';
        $this->template->section->body = $view;
    }

}
