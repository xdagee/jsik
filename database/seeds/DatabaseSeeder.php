<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(EducationLevelsTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(EthnicitiesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }
}
