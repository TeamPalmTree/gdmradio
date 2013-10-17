<?php

class Controller_News extends Controller_GDMRadio
{

    public function before()
    {
        $this->section = 'news';
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('news/index');
        // get posts
        $view->posts = Model_Post::recent();
        // set template vars
        $this->template->title = 'News';
        $this->template->content = $view;
	}

}
