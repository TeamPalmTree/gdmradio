<?php

class Controller_Welcome extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->section->name = 'Home';
    }

	public function action_index()
	{

        // create view
        $view = View::forge('welcome/index');

        // get carousel & posts
        $carousels = Model_Carousel::all();
        $posts = Model_Post::viewable_recent();

        // load opauth configuration
        Config::load('opauth', true);
        // generate facebook config
        $facebook_config = array(
            'appId' => Config::get('opauth.Strategy.Facebook.app_id'),
            'secret' => Config::get('opauth.Strategy.Facebook.app_secret'),
            'allowSignedRequest' => false
        );

        // set up facebook sdk
        $facebook = new Facebook($facebook_config);
        // get activities
        $result = $facebook->api('/GDMRadio/posts?fields=created_time,from,icon,link,picture,message,actions,type&limit=6');
        $activities = $result['data'];
        // fix up date times
        foreach ($activities as &$activity)
            $activity['user_created_time'] = date(Helper::$user_pattern, strtotime($activity['created_time']));

        // set up twitter api
        $twitter = new TwitterOAuth(
            Config::get('opauth.Strategy.Twitter.key'),
            Config::get('opauth.Strategy.Twitter.secret'),
            Config::get('opauth.Strategy.Twitter.access_token'),
            Config::get('opauth.Strategy.Twitter.access_token_secret')
        );

        // get tweets
        $tweets = $twitter->get('statuses/user_timeline', array('screen_name' => 'GDMRadio', 'count' => 6));

        // set view data
        $view->set('carousels', array_values($carousels), false);
        $view->set('posts', $posts, false);
        $view->set('activities', $activities, false);
        $view->set('tweets', $tweets, false);
        // set template vars
        $this->template->section->body = $view;

	}

    public function action_edit()
    {
        // create view
        $view = View::forge('welcome/form');
        // set template vars
        $this->template->section->body = $view;
    }

    public function post_edit()
    {

        // verify access
        if (!Auth::has_access('gdmradio.welcome[update]'))
            throw new HttpAccessDeniedException();

        $carousels = array();
        // get post input
        $input = Input::json();
        // if we have an input post, save
        if (count($input) > 0)
        {
            // delete all existing carousels
            DB::delete('carousels')->execute();
            // create new carousels
            foreach ($input as $carousel_input)
            {
                $carousel = Model_Carousel::forge();
                $carousel->populate($carousel_input);
                $carousel->save();
                $carousels[] = $carousel;
            }
        }
        else
        {
            // get carousels
            $carousels = array_values(Model_Carousel::all());
        }

        // success
        return $this->response($carousels);

    }

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}

    public function post_image()
    {

        // verify access
        if (!Auth::has_access('gdmradio.welcome[update]'))
            throw new HttpAccessDeniedException();
        // process & save uploads
        Upload::process();
        Upload::save();
        // success
        return $this->response('SUCCESS');

    }

}
