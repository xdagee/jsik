<?php

use Illuminate\Database\Seeder;

class EthnicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ethnicities = [

        	['name'=>'Akan'],

          	['name'=>'Akwamu'],

          	['name'=>'Dagomba'],

        	['name'=>'Ewe'],

       		['name'=>'Frafra'],

       		['name'=>'Ga'],

       		['name'=>'Guan']

        ];
        
        DB::table('ethnicities')->insert($ethnicities);
    }
}
