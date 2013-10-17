<?php

namespace Fuel\Migrations;

class Create_Schema
{
    public function up()
    {
        // DJs

        \DBUtil::create_table('DJs', array(
                'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
                'order' => array('constraint' => 11, 'type' => 'int'),
                'name' => array('constraint' => 255, 'type' => 'varchar'),
                'email' => array('constraint' => 255, 'type' => 'varchar'),
                'description' => array('type' => 'text'),
            ), array('id'), false, 'InnoDB', 'utf8_general_ci');

        // DJ TIMES

        \DBUtil::create_table('DJ_times', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
            'days' => array('constraint' => 255, 'type' => 'varchar'),
            'times' => array('constraint' => 255, 'type' => 'varchar'),
            'DJ_id' => array('constraint' => 11, 'type' => 'int'),
        ), array('id'), false, 'InnoDB', 'utf8_general_ci',
            array(
                array(
                    'key' => 'DJ_id',
                    'reference' => array(
                        'table' => 'DJs',
                        'column' => 'id',
                    ),
                    'on_delete' => 'CASCADE',
                ),
            )
        );

        // POSTS

        \DBUtil::create_table('posts', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
            'posted_on' => array('type' => 'timestamp'),
            'title' => array('constraint' => 255, 'type' => 'varchar'),
            'text' => array('type' => 'text'),
        ), array('id'), false, 'InnoDB', 'utf8_general_ci');

        // POST COMMENTS

        \DBUtil::create_table('post_comments', array(
                'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
                'commented_on' => array('type' => 'timestamp'),
                'comment' => array('type' => 'text'),
                'post_id' => array('constraint' => 11, 'type' => 'int'),
            ), array('id'), false, 'InnoDB', 'utf8_general_ci',
            array(
                array(
                    'key' => 'post_id',
                    'reference' => array(
                        'table' => 'posts',
                        'column' => 'id',
                    ),
                    'on_delete' => 'CASCADE',
                ),
            )
        );

    }

    public function down()
    {
        \DBUtil::drop_table('post_comments');
        \DBUtil::drop_table('posts');
        \DBUtil::drop_table('DJ_times');
        \DBUtil::drop_table('DJs');
    }
}