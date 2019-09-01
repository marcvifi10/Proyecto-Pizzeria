<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromotionsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('product_promotion', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('promotion_id')->unsigned();			
			$table->foreign('promotion_id')->references('id')->on('promotions');
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
		Schema::dropIfExists('product_promotion');
    }
}
