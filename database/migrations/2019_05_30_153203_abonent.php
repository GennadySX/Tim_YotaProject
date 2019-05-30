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
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('number')->unique();
            $table->integer('tariff_id')->unsigned();
            $table->string('passport_number');
            $table->date('date_buying');
        });




    }

    public function down()
    {
        Schema::drop('abonent');
    }

}
