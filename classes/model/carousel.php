<?php

class Model_Carousel extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'order',
        'image',
        'website',
        'title',
        'text',
    );

    public function populate($input)
    {
        $this->order = $input['order'];
        $this->image = $input['image'];
        $this->website = $input['website'];
        $this->title = $input['title'];
        $this->text = $input['text'];
    }

    public static function all()
    {
        return self::query()
            ->order_by('order', 'ASC')
            ->get();
    }

}