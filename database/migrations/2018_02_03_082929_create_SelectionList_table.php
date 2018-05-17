<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectionListTable extends Migration
{
    public function up()
    {
        Schema::create('SelectionList', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ParentID')->nullable();
            $table->integer('CategoryKindID');
            $table->integer('Code');
            $table->string('Title',300);
            $table->string('Comment',400)->nullable();
            $table->integer('CreatorID');
            $table->integer('EditorID')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('SelectionList');
    }
}
