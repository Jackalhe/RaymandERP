<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrganizationRoleTable extends Migration
{
//    if (Schema::hasTable('users')) {
//        //
//    }
//
//    if (Schema::hasColumn('users', 'email')) {
//        //
//    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrganizationRole', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title',150)->unique();
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
        Schema::dropIfExists('OrganizationRole');
    }
}
