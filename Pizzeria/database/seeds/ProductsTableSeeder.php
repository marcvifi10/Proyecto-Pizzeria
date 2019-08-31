<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name'=>'Margarita',
            'description'=>'Opción básica de Mozzarela con base de tomate',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Cuatro Quesos',
            'description'=>'Surtido de los mejores quesos, parmesano, mozzarela...',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Carbonara',
            'description'=>'Carrer Migdia 16, Girona',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Barbacoa',
            'description'=>'Carrer Migdia 16, Girona',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Cuantro estaciones',
            'description'=>'Carrer Migdia 16, Girona',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Vegetal',
            'description'=>'Carrer Migdia 16, Girona',
            'ingredient_category_id'=>1,
        ]);
    }
}
