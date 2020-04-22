<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class InsertUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(['username' => 'apple', 'password' => Hash::make('play123')]);
        DB::table('users')->insert(['username' => 'orange', 'password' => Hash::make('play123')]);
        DB::table('users')->insert(['username' => 'cat', 'password' => Hash::make('play123')]);
        DB::table('users')->insert(['username' => 'dog', 'password' => Hash::make('play123')]);
        DB::table('users')->insert(['username' => 'burger', 'password' => Hash::make('play123')]);
        DB::table('users')->insert(['username' => 'fries', 'password' => Hash::make('play123')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->delete();
    }
}
