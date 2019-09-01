<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenusProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('menu_product', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('menu_id')->unsigned();
			$table->foreign('menu_id')->references('id')->on('menus');
			$table->bigInteger('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('menu_product');
    }
}
