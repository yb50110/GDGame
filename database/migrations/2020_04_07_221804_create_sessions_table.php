<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->boolean('completed');
            $table->boolean('started');
            $table->boolean('expired');

            // each forks
            $table->boolean('A')->nullable();
            $table->boolean('B')->nullable();
            $table->boolean('C')->nullable();
            $table->boolean('D')->nullable();
            $table->boolean('E')->nullable();
            $table->boolean('F')->nullable();
            $table->boolean('G')->nullable();
            $table->boolean('H')->nullable();
            $table->boolean('I')->nullable();
            $table->boolean('J')->nullable();
            $table->boolean('K')->nullable();
            $table->boolean('L')->nullable();
            $table->boolean('M')->nullable();
            $table->boolean('N')->nullable();
            $table->boolean('O')->nullable();
            $table->boolean('P')->nullable();
            $table->boolean('Q')->nullable();
            $table->boolean('R')->nullable();
            $table->boolean('S')->nullable();
            $table->boolean('T')->nullable();
            $table->boolean('U')->nullable();
            $table->boolean('FIRE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
