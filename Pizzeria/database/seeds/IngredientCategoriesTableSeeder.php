<?php

use Illuminate\Database\Seeder;

class IngredientCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_categories')->insert([
            'name'=>'Carne'
		]);

		DB::table('ingredient_categories')->insert([
			'name'=>'Pescado'
		]);

		DB::table('ingredient_categories')->insert([
			'name'=>'Vegetal'
		]);

		DB::table('ingredient_categories')->insert([
			'name'=>'Marisco'
		]);

		DB::table('ingredient_categories')->insert([
			'name'=>'Lácteo'
		]);

		DB::table('ingredient_categories')->insert([
			'name'=>'Salsa'
		]);
    }
}
