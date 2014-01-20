<?php

class Model_DJ extends \Promoter\Model\Promoter_User
{

    public static function all()
    {

        // first get the group id for DJs
        $group = \Auth\Model\Auth_Group::query()->where('name', 'DJs')->get_one();
        // get DJs
        $DJs = \Promoter\Model\Promoter_User::for_groups(array($group->id));
        // for each DJ, set the shortname & description
        foreach ($DJs as $DJ)
        {
            // get mapped metadata for this DJ
            $DJ_metadata = $DJ->mapped_metadata(array('shortname', 'description'));
            // set name & desc
            if (isset($DJ_metadata['shortname']))
                $DJ->shortname = $DJ_metadata['shortname'];
            if (isset($DJ_metadata['description']))
                $DJ->description = $DJ_metadata['description'];
        }

        // success
        return $DJs;

    }

}