<?php

class Model_DJ_Time extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'days',
        'times',
        'DJ_id',
    );

    protected static $_belongs_to = array(
        'DJ',
    );

    protected static $_table_name = 'DJ_times';

}