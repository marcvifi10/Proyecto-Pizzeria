<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('ingredient_product', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('product_id')->unsigned();			
			$table->foreign('product_id')->references('id')->on('products');
			$table->bigInteger('ingredient_id')->unsigned();
			$table->foreign('ingredient_id')->references('id')->on('ingredients');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('ingredient_product');
    }
}