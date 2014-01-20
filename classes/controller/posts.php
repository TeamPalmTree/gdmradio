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
        return $this->action_page(1);
    }

	public function action_page($page)
	{

        // load gdmradio condif
        Config::load('gdmradio', true);
        // get posts per page
        $posts_per_page = Config::get('gdmradio.posts_per_page');
        // create view
        $view = View::forge('posts/index');
        // get posts
        $posts = Model_Post::viewable_paged($page, $posts_per_page);
        // set page and posts
        $view->page = $page;
        $view->set('posts', $posts, false);
        // set template vars
        $this->template->title = 'News';
        $this->template->section->body = $view;

	}

    public function action_view($id)
    {

        // create view
        $view = View::forge('posts/view');
        // set post comment access
        $view->post_comment_access = Auth::has_access('gdmradio.post_comment[create]');
        // set template vars
        $this->template->title = 'Post';
        $this->template->section->body = $view;

    }

    public function action_create()
    {

        // verify access
        if (!Auth::has_access('gdmradio.posts[create]'))
            throw new HttpAccessDeniedException();
        // create view
        $view = View::forge('posts/form');
        // set template vars
        $this->template->title = 'Create Post';
        $this->template->section->body = $view;

    }

    public function action_edit()
    {

        // verify access
        if (!Auth::has_access('gdmradio.posts[update]'))
            throw new HttpAccessDeniedException();
        // create view
        $view = View::forge('posts/form');
        // set template vars
        $this->template->title = 'Edit Post';
        $this->template->section->body = $view;

    }

    public function post_view($id)
    {
        // get post + comments
        $post = Model_Post::view_commentable($id);
        // success
        return $this->response($post);
    }

    public function post_create()
    {

        // verify access
        if (!Auth::has_access('gdmradio.posts[create]'))
            throw new HttpAccessDeniedException();

        // get block input
        $input = Input::json();
        // if we have an input post, save
        if (count($input) > 0)
        {
            // create new post
            $post = Model_Post::forge();
            // populate post
            $post->populate($input);
            // save post
            $post->save();
        }
        else
        {
            // get creatable post
            $post = Model_Post::viewable_creatable();
        }

        // success
        return $this->response($post);

    }

    public function post_edit($id)
    {

        // verify access
        if (!Auth::has_access('gdmradio.posts[update]'))
            throw new HttpAccessDeniedException();

        // get post
        $post = Model_Post::find($id);
        // get post input
        $input = Input::json();
        // if we have an input post, save
        if (count($input) > 0)
        {
            // populate post
            $post->populate($input);
            // save post
            $post->save();
        }

        // success
        return $this->response($post);

    }

    public function post_comment($id)
    {

        // verify access
        if (!Auth::has_access('gdmradio.post_comments[create]'))
            throw new HttpAccessDeniedException();

        // get post comment input
        $input = Input::json();
        // if we have an input post comment, save
        if (count($input) > 0)
        {
            // create new post comment
            $post_comment = Model_Post_Comment::forge(array('post_id' => $id));
            // populate post comment
            $post_comment->populate($input);
            // save post comment
            $post_comment->save();
        }

        // set username
        $post_comment->username = Auth::get_screen_name();
        // success
        return $this->response($post_comment);

    }

    public function post_image()
    {

        // verify access
        if (!Auth::has_access('gdmradio.posts[create]') && !Auth::has_access('gdmradio.posts[update]'))
            throw new HttpAccessDeniedException();
        // process & save uploads
        Upload::process();
        Upload::save();
        // success
        return $this->response('SUCCESS');

    }

    public function action_delete($id)
    {
        // verify access
        if (!Auth::has_access('gdmradio.posts[delete]'))
            return Response::redirect('/posts');
        // delete post by id
        DB::delete('posts')->where('id', $id)->execute();
        // success
        Response::redirect('/posts');
    }

}
