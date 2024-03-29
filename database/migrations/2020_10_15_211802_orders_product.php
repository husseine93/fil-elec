<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('OrdersProduct', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                    $table->unsignedBigInteger('product_id');
                    $table->foreign('product_id')
                        ->references('id')
                        ->on('products')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                    $table->unsignedBigInteger('order_id');
                    $table->foreign('order_id')
                        ->references('id')
                        ->on('orders')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
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
