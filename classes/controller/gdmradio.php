<?php

class Controller_GDMRadio extends Controller_Standard
{

    public function before()
    {

        // run parent before
        parent::before();

        // standard data setup
        $this->document->name = 'GDM Radio';
        $this->document->description = 'A United State of Dance, GDM Radio Broadcasts Electronic Dance Music Live from Atlanta 24/7/365';
        $this->document->keywords = 'EDM,Gay,Atlanta,Radio,PLUR,Electronic,Dance,Music,United,State';
        $this->document->image = 'http://www.gdmradio.com/assets/img/logo-facebook.png';
        $this->document->url = 'http://www.gdmradio.com';
        
    }

    public function after($response)
    {

        // perform template post processing
        if (is_object($this->template))
        {
            // navigation
            $this->template->body->navigation = View::forge('gdmradio/navigation', array(
                'section_name' => $this->body->name,
            ));

            // set login button view
            $this->template->body->navigation->promoter_menu = Promoter::menu_view();
            // set admin menu
            $this->template->body->navigation->promoter_menu->admin_menu = View::forge('gdmradio/adminmenu');

            // header & footer
            $this->template->body->header = View::forge('gdmradio/header');
            $this->template->body->footer = View::forge('gdmradio/footer');
        }

        // return standard
        return parent::after($response);

    }

}
