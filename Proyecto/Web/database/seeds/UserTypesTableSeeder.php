<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_users')->insert([
            'name' => 'admin'
		]);
		
		DB::table('type_users')->insert([
            'name' => 'franchise'
		]);
		
		DB::table('type_users')->insert([
            'name' => 'client'
        ]);
    }
}
