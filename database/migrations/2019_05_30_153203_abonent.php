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
        DB::beginTransaction();

        // Create table for storing roles
        Schema::create('abonent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('number')->unique();
            $table->string('passport_number');
            $table->date('date_buying');
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('abonent_status', function (Blueprint $table) {
            $table->integer('abonent_id')->unsigned();
            $table->integer('tariff_id')->unsigned();

            $table->foreign('abonent_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tariff_id')->references('id')->on('tariff')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['abonent_id', 'tariff_id']);
        });

        // Create table for storing permissions


        DB::commit();
    }

    public function down()
    {

    }

}
