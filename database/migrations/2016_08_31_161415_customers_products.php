<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomersProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_products', function(Blueprint $table){
           $table->integer('customers_id')->unsigned()->index();
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade');

            $table->integer('products_id')->unsigned()->index();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers_products');
    }
}
