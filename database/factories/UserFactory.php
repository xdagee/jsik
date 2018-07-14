<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Region::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->country,
    ];
});

$factory->define(App\District::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->state,
    ];
});

$factory->define(App\Town::class, function (Faker $faker) {

    return [
        'name' => $faker->city,
    ];
});

$factory->define(App\Residence::class, function (Faker $faker) {

    return [
        'name' => $faker->streetName,
    ];
});

$factory->define(App\PlaceOfBirth::class, function (Faker $faker) {

    return [
        'name' => $faker->streetName,
    ];
});

$factory->define(App\Speciality::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->jobTitle,
    ];
});

$factory->define(App\Employee::class, function (Faker $faker) {
    $gender = $faker->boolean($chanceOfGettingTrue = 50);
    $gend = $gender ? 'male': 'female';
    $dob = $faker->date($format = 'Y-m-d', $max = '1995-12-31');
    
    return [
        	'firstname'				=>	$faker->firstName($gend),
        	'lastname'				=>	$faker->firstName($gend),
        	'othername'				=>	null,
        	'dob'					=>	$dob,
        	'gender'				=>	$gender,
        	'years_of_experience'	=>	$faker->numberBetween($min = 1, $max = 20),
        	'work_place'			=> 	$faker->company,
        	'residence_id'			=>	App\Residence::all()->random()->id,
            'place_of_birth_id'    	=>  App\PlaceOfBirth::all()->random()->id,
            'education_level_id'    =>  App\EducationLevel::all()->random()->id
    ];
});
