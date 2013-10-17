<?php

class Model_DJ extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'order',
        'name',
        'email',
        'description',
    );

    protected static $_has_many = array(
        'DJ_times',
    );

    protected static $_table_name = 'DJs';

    public function image()
    {
        return '/assets/img/DJs/' . preg_replace('/ /', '', $this->name) . '.jpg';
    }

    public static function ordered()
    {
        return Model_DJ::query()
            ->related('DJ_times')
            ->order_by('order', 'asc')
            ->get();
    }

}