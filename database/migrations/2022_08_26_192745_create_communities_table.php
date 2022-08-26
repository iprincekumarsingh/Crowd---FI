<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id('cid');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('desc');
            $table->string('header_image');
            $table->string('twitter');
            $table->string('insta');
            $table->string('linkedin');
            $table->string('status');
            $table->string('website');
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
        Schema::dropIfExists('communities');
    }
};
