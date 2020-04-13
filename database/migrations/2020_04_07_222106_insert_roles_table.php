<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->insert([
            'name' => 'Jack',
            'description' => 'Natural born leader but could be a little aggressive when things don\'t turn out the way he wants',
            'default_image_link' => '/images/0-Jacke.jpg'
        ]);
        DB::table('roles')->insert([
            'name' => 'Ralph',
            'description' => 'A fair and logical person but the gentleness reduces his charisma and has trouble getting followers',
            'default_image_link' => '/images/0-Ralph.jpg'
        ]);
        DB::table('roles')->insert([
            'name' => 'Piggy',
            'description' => 'Friendly and compassionate person but unfortunately the subject of jokes and is bullied often',
            'default_image_link' => '/images/0-Piggy.jpg'
        ]);
        DB::table('roles')->insert([
            'name' => 'Simone',
            'description' => 'Quiet but thoughtful person. Usually very neutral so doesn\'t get on the bad side of people',
            'default_image_link' => '/images/0-Simone.jpg'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('roles')->delete();
    }
}
