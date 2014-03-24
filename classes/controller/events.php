<?php

class Controller_Events extends Controller_GDMRadio
{

    public function before()
    {
        // run parent
        parent::before();
        // set section
        $this->section->name = 'Events';
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
        $events = $result['data'];
        // fix up date times
        foreach ($events as &$event)
            $event['user_start_time'] = date(Helper::$user_pattern, strtotime($event['start_time']));

        // set events
        $view->events = $events;
        // set template vars
        $this->template->title = 'DJs';
        $this->template->section->body = $view;

    }

}
