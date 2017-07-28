<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/**
 *
 * Define seed database for User table
 *
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'birthday' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'gender' => 1,
        'address' => $faker->address,
        'phone_number' => "0123456",
        'is_admin' => 0,
        'is_active' => 0,
        'remember_token' => str_random(10),
    ];
});

/**
 *
 * Define seed database for Suppliers table
 *
 */
$factory->define(App\Suppliers::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph
    ];
});

/**
 *
 * Define seed database for Categories table
 *
 */
$factory->define(App\Categories::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->jobTitle,
        'description' => $faker->paragraph
    ];
});

/**
 *
 * Define seed database for table Orders
 *
 */
$factory->define(App\Orders::class, function (Faker\Generator $faker){

    return [
        'trans_at' => $faker->dateTime(),
        'custom_address' => $faker->address,
        'status' => 0
    ];
});

/**
 *
 * Define seed database for table Materials
 *
 */
$factory->define(App\Materials::class, function (Faker\Generator $faker){

    return [
        'name' => $faker->name,
        'price' => 10.00,
        'description' => $faker->paragraph
    ];
});

/**
 *
 * Define seed database for table Food
 *
 */
$factory->define(App\Food::class, function (Faker\Generator $faker){

    return [
        'name' => $faker->name,
        'price' => 10.00,
        'description' => $faker->paragraph
    ];
});

/**
 *
 * Define seed database for table dailymenu
 *
 */
$factory->define(App\DailyMenu::class, function (Faker\Generator $faker){

    return [
        'quantity' => 20
    ];
});

/**
 *
 * Define seed database for table order_item
 *
 */
$factory->define(App\OrderItems::class, function (Faker\Generator $faker){

    return [
        'quantity' => 2
    ];
});