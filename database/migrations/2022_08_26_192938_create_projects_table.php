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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('pid');
            $table->string('title');
            $table->string('desc');
            $table->string('header_image');
            $table->string('sc_1')->null();
            $table->string('sc_2')->null();
            $table->string('sc_3')->null;
            $table->string('sc_4');
            $table->string('website');
            $table->string('github_link');
            $table->string('is_verified')->default(1);
            $table->string('cid');
            $table->string('status');
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
        Schema::dropIfExists('projects');
    }
};
