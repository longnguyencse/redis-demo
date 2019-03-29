<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('store_id');
            $table->text('name');
            $table->float('weight')->comment('miligam');
            $table->float('price')->comment('VND');
            $table->unsignedInteger('fast_ship')->comment("O: Khoong co, 1: Co");
            $table->unsignedInteger('time_bq')->comment('Thoi gian bao quan < 60');
            $table->timestamps();

            // khoa ngoai
            $table->foreign('store_id')->on('store');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
