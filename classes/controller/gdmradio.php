<?php

class Controller_GDMRadio extends Controller_Shared
{

    public function router($method, $params)
    {

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
        }

        // forward to FPHP router
        parent::router($method, $params);

    }

}
