<?php

use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $religions = [

        	['name'=>'Christian'],

          	['name'=>'Islam'],

          	['name'=>'Traditionalist']

        ];
        
        DB::table('religions')->insert($religions);
    }
}
