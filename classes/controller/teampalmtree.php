<?php

class Controller_TeamPalmTree extends Controller_Shared
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
            $this->template->network = View::forge('teampalmtree/network');
            $this->template->footer = View::forge('teampalmtree/footer');
            $this->template->navigation = View::forge('teampalmtree/navigation', array(
                'section' => $this->section,
            ));
        }

        // forward to FPHP router
        parent::router($method, $params);

    }

}
