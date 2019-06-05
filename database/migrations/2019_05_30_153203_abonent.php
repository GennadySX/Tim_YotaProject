<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Abonent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('abonent', function (Blueprint $table) {

            $table->integer('user_id')->unsigned();
            $table->integer('tariff_id')->unsigned();
        });




    }

    public function down()
    {
        Schema::drop('abonent');
    }

}
