<?php

class Controller_GDMRadio extends Controller_TPT
{

    public function router($method, $params)
    {

        // forward to FPHP router
        parent::router($method, $params);

        ////////////////////
        // TEMPLATE SETUP //
        ////////////////////

        // if we aren't restful and aren't passing a REST key
        // set up the template for the UI
        if (!$this->is_restful())
        {
            $this->template->navigation = View::forge('gdmradio/navigation', array(
                'section' => $this->section,
            ));

            $this->template->header->content = View::forge('gdmradio/header');
            $this->template->footer->content = View::forge('gdmradio/footer');
            // set site
            $this->template->site = 'GDM Radio';
        }

    }

}
