<?php

namespace Fuel\Migrations;

class Create_Schema
{
    public function up()
    {
        // DJs

        \DBUtil::create_table('DJs', array(
                'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
                'found_on' => array('type' => 'timestamp', 'default' => '0000-00-00 00:00:00'),
                'last_play' => array('type' => 'timestamp', 'null' => true),
                'date' => array('type' => 'timestamp'),
                'available' => array('type' => 'boolean', 'default' => '1'),
                'track' => array('type' => 'smallint', 'null' => true),
                'BPM' => array('type' => 'smallint', 'null' => true),
                'rating' => array('type' => 'smallint', 'null' => true),
                'relevance' => array('type' => 'smallint', 'null' => true),
                'bit_rate' => array('constraint' => 11, 'type' => 'int'),
                'sample_rate' => array('constraint' => 11, 'type' => 'int'),
                'ups' => array('constraint' => 11, 'type' => 'int', 'default' => '0'),
                'downs' => array('constraint' => 11, 'type' => 'int', 'default' => '0'),
                'name' => array('constraint' => 255, 'type' => 'varchar'),
                'duration' => array('constraint' => 255, 'type' => 'varchar'),
                'post' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'title' => array('constraint' => 255, 'type' => 'varchar'),
                'album' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'artist' => array('constraint' => 255, 'type' => 'varchar'),
                'composer' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'conductor' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'copyright' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'genre' => array('constraint' => 255, 'type' => 'varchar'),
                'ISRC' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'label' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'language' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'mood' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'key' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'energy' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
                'website' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
            ), array('id'), false, 'InnoDB', 'utf8_general_ci');

        \DBUtil::create_index('files', 'available');
        \DBUtil::create_index('files', 'name');

    }

    public function down()
    {
        \DBUtil::drop_table('settings');
    }
}