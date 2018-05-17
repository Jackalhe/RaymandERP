<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiscalyearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fiscalyear',function (Blueprint $table){
            $table -> increments('id');
            $table -> integer('Fiscalyear')->unique();
            $table -> date('StartDate');
            $table -> date('EndDate');
            $table -> decimal('TaxPercent',4,2)->default(0);
            $table -> decimal('TollPercent',4,2)->default(0);
            $table -> decimal('TollPercent2',4,2)->default(0);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fiscalyear');
    }
}
