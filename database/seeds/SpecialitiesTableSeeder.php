<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*//
         $specialities = [

        	['name'=>'Windows Systems Administrator'],

            ['name'=>'Linux Systems Administrator'],

            ['name'=>'Network Administrator'],

            ['name'=>'Frontend Web Designer'],

        	['name'=>'Frontend Web Developer'],

       		['name'=>'Backend PHP Developer'],

       		['name'=>'Backend Java Developer'],

       		['name'=>'Backend Python Developer'],

       		['name'=>'Project Manager'],

       		['name'=>'IT Project Consultant'],

       		['name'=>'IT Business Consultant'],

       		['name'=>'Graphics Designer'],

       		['name'=>'Customer Care Service Provider']

        ];
        
        DB::table('specialities')->insert($specialities);
        */

        factory(App\Speciality::class, 50)->create();
    }
}
