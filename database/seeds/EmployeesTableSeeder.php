<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class, 50)->create()->each(function($e){
            $faker = Faker::create();
        	$e->specialities()->attach(App\Speciality::all()->random()->id,[
                'years_of_experience' => $faker->numberBetween($min = 1, $max = 20)
            ]);
        });
    }
}
