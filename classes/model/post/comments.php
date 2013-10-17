<?php

class Model_Post_Comment extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'commented_on',
        'times',
        'DJ_id',
    );

    protected static $_belongs_to = array(
        'DJ',
    );

}