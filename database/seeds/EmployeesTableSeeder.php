<?php

use Illuminate\Database\Seeder;

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
        	$e->specialities()->attach(App\Speciality::all()->random()->id);
        });
    }
}
