<?php

class Model_Post extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'posted_on',
        'title',
        'text',
    );

    protected static $_has_many = array(
        'post_comments',
    );

    public static function recent()
    {
        return Model_Post::query()
            ->order_by('posted_on', 'desc')
            ->rows_limit(30)
            ->get();
    }

}