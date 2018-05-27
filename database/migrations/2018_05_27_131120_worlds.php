<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Worlds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worlds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('server_id');
            $table->string('name');
            $table->text('description');
            $table->string('rate');
            $table->string('donate');
            $table->string('onlineUrl');
            $table->string('IpLogin');
            $table->string('IpGame');
            $table->string('created');
            $table->string('status');
            $table->string('gameVersion');
            $table->string('versionNumber');
            $table->string('modification');
            $table->text('modDesc');
            $table->string('clans');
            $table->string('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worlds');
    }
}
