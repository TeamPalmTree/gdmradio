<?php

class Model_DJ extends \Promoter\Model\Promoter_User
{

    public $shortname;
    public $description;

    public static function all()
    {

        // first get the role id for DJs
        $role = \Auth\Model\Auth_Role::query()->where('name', 'DJ')->get_one();
        // verify we got one
        if (is_null($role))
            return array();
        // get DJs
        $DJs = self::for_roles(array($role->id));
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