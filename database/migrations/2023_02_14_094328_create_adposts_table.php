<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adposts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('postTitle');
            $table->text('postDescription');
            $table->integer('categoryId');
            $table->integer('countryId');
            $table->integer('cityId');
            $table->timestamp('dueDate');
            $table->integer('budget');
            $table->text('skill');
            $table->integer('language');
            $table->integer('learningMethod');
            $table->integer('status')->comment("0=new 1=approved 2=Blocked");
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
        Schema::dropIfExists('adposts');
    }
}
