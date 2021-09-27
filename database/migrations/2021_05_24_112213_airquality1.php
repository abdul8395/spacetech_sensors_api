<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Airquality1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_quality',function (Blueprint $table){
            $table->increments('id');
            $table->string('loc');
            $table->float('co');
            $table->float('no2');
            $table->float('nh3');
            $table->float('co2');
            $table->float('voc');
            $table->float('pm1');
            $table->float('pm2');
            $table->float('pm3');
            $table->float('pm4');
            $table->float('pm5');
            $table->float('pm6');
            $table->float('pm7');

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
        //
    }
}
