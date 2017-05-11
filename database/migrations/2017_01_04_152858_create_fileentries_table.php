<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileentriesTable extends Migration
{

    public function up()
    {
        Schema::create('fileentries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');
            $table->string('Title');
            $table->string('Description');
            $table->integer('price');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fileentries');

    }
}
