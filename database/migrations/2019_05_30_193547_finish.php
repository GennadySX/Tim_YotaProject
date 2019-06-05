<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Finish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();
        Schema::create('good_division', function (Blueprint $table) {
            $table->integer('shop_id')->unsigned();
            $table->integer('good_id')->unsigned();
        });



        Schema::table('department', function ($table) {
            $table->foreign('region_id')
                ->references('id')->on('regions')
                ->onUpdate('restrict')->onDelete('restrict');
        });


        Schema::table('abonent', function ($table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('tariff_id')
                ->references('id')->on('tariff')
                ->onUpdate('restrict')->onDelete('restrict');

        });


        Schema::table('equipment', function ( $table) {

            $table->foreign('region_id')
                ->references('id')->on('regions')
                ->onUpdate('restrict')->onDelete('restrict');
        });


        Schema::table('good_division', function ($table) {
            $table->foreign('shop_id')
                ->references('id')->on('shops')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('good_id')
                ->references('id')->on('stock')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['shop_id', 'good_id']);
        });




        Schema::create('shop_division', function (Blueprint $table) {
            $table->integer('shop_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['region_id', 'shop_id']);
        });

        Schema::create('employees_status', function (Blueprint $table) {

            $table->integer('employees_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->integer('department_id')->unsigned();

            $table->foreign('employees_id')->references('id')->on('employees')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('department')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['employees_id', 'role_id','department_id']);
        });


        DB::commit();

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
