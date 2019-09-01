<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(OrderStatesTableSeeder::class);
		$this->call(UserTypesTableSeeder::class);
		$this->call(ProductCategoriesTableSeeder::class);
		$this->call(IngredientCategoriesTableSeeder::class);
		$this->call(FranchisesTableSeeder::class);
        //$this->call(IngredientsTableSeeder::class);
    }
}
