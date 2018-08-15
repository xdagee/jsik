<?php

use Illuminate\Database\Seeder;

class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $education_levels = [

        	['name'=>'Six Form'],

          ['name'=>'A Level'],

          ['name'=>'JHS'],

        	['name'=>'SHS'],

       		['name'=>'Diploma'],

       		['name'=>'Degree'],

       		['name'=>'Msc'],

       		['name'=>'Mphil'],

       		['name'=>'Mba'],

       		['name'=>'PHD']

        ];
        
        DB::table('education_levels')->insert($education_levels);
    }
}
