<?php

use Illuminate\Database\Seeder;

class FranchisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('franchises')->insert([
            'name'=>'Girona Centre',
            'address'=>'Carrer Migdia 16, Girona',
            'phone'=>'972 809 902',
            'email'=>'gironacentre@majovis.com',
            'coordinates'=>'41.9770666,2.8202097',
        ]);

        DB::table('franchises')->insert([
            'name'=>'Figueres Centre',
            'address'=>'Carrer Nou 29, Figueres',
            'phone'=>'972 809 902',
            'email'=>'figuerescentre@majovis.com',
            'coordinates'=>'42.2652818,2.9614636',
        ]);
    }
}
