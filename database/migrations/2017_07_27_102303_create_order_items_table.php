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
            $table->integer('target_id')->unsigned();
            $table->string('target_type');
            $table->integer('order_id')->unsigned();
            $table->tinyInteger('quantity');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('target_id','foreign_1')->references('id')->on('food');
             $table->foreign('target_id','foreign_2')->references('id')->on('materials');
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
