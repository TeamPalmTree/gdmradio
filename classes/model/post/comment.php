<?php

class Model_Post_Comment extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'commented_on',
        'comment',
        'post_id',
        'user_id',
    );

    protected static $_belongs_to = array(
        'post',
    );

    public function user_commented_on()
    {
        return Helper::server_datetime_string_to_user_datetime_string($this->commented_on);
    }

    public function populate($input)
    {

        // initialize
        if (is_null($this->id))
        {
            // set comment poster
            $this->user_id = Auth::get_user_id()[1];
            // set commented on
            $this->commented_on = Helper::server_datetime_string();
        }

        // set other properties
        $this->comment = $input['comment'];

    }

}