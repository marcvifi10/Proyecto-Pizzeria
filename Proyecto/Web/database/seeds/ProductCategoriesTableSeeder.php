<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('product_categories')->insert([
            'name'=>'Bebida'
		]);

        DB::table('product_categories')->insert([
            'name'=>'Pizza'
		]);
		
		DB::table('product_categories')->insert([
            'name'=>'Menu'
        ]);

		DB::table('product_categories')->insert([
            'name'=>'Postre'
		]);
    }
}
