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

$factory->define(App\Carrousel::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'titulo'  		=> $faker->sentence(2),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\About::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'titulo'  		=> $faker->sentence(2),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'titulo'  		=> $faker->sentence(2),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Specialty::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'titulo'  		=> $faker->sentence(2),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Calltac::class, function (Faker $faker) {
    return [
        'titulo'  		=> $faker->sentence(2),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Testimony::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'name'  		=> $faker->sentence(2),
        'position'		=> $faker->sentence(3), 
        'description' 	=> $faker->text(140),
    ];
});

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'file'  		=> $faker->imageUrl($width = 50, $height=100),
        'name'  		=> $faker->sentence(2),
        'position'	 	=> $faker->text(140),
    ];
});