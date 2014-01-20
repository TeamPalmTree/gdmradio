<?php

class Controller_Events extends Controller_GDMRadio
{

    public function before()
    {
        // set section
        $this->section = 'Events';
        // run parent
        parent::before();
    }

    public function action_index()
    {
        // create view
        $view = View::forge('events/index');
        // load opauth configuration
        Config::load('opauth', true);
        // generate config
        $config = array(
            'appId' => Config::get('opauth.Strategy.Facebook.app_id'),
            'secret' => Config::get('opauth.Strategy.Facebook.app_secret'),
            'allowSignedRequest' => false
        );

        // set up facebook sdk
        $facebook = new Facebook($config);
        $result = $facebook->api('/GDMRadio/events?fields=id,name,description,location,start_time,end_time,picture');
        // set events
        $view->events = $result['data'];
        // set template vars
        $this->template->title = 'DJs';
        $this->template->section->body = $view;
    }

}
