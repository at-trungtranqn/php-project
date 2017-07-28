<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_id')->nullable();
            $table->string('target_type')->nullable();
            $table->integer('order_id')->unsigned();
            $table->tinyInteger('quantity');
            $table->foreign('order_id')->references('id')->on('orders');
            // $table->foreign('target_id')->references('id')->on('food');
            // $table->foreign('target_id')->references('id')->on('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
