<?php

use Illuminate\Database\Seeder;

class OrderStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_states')->insert([
			'name' => 'Preparacion',
			'description' => 'Preparacion'
		]);
		
		DB::table('order_states')->insert([
			'name' => 'Horno',
			'description' => 'Horon'			
		]);
		
		DB::table('order_states')->insert([
			'name' => 'Reparto',
			'description' => 'Reparto'			
		]);
		
		DB::table('order_states')->insert([
			'name' => 'finished',
			'description' => 'finished'
        ]);
    }
}
