<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_methods', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('entry_code');
            $table->string('image_name')->nullable();
            $table->string('call_option')->nullable();
            $table->integer('is_deleted')->comment('1=Active 0=inactive');
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
        Schema::dropIfExists('learning_methods');
    }
}
