<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name'=>'Parmesano',
            'description'=>'Queso parmesano de calidad.',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Mozzarela',
            'description'=>'La mejor de la zona.',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Pimiento verde',
            'description'=>'Kilometro cero',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Carne picada',
            'description'=>'100% vacuno',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Salsa Barbacoa',
            'description'=>'Artesanal',
            'ingredient_category_id'=>1,
        ]);

        DB::table('ingredients')->insert([
            'name'=>'Salsa Carbonara',
            'description'=>'De las mejores marcas',
            'ingredient_category_id'=>1,
        ]);
    }
}
