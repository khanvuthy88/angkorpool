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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'surname' => $faker->lastName,
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'gender' => $faker->randomElement(['M', 'F']),
        'dob'=> $faker->dateTimeBetween('-30 years', '-20 years'),
        'marital_status' => null,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserExperience::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () { return factory(App\User::class)->create()->id; },
        'title' => $faker->jobTitle,
        'company_name' => $faker->company,
        'from_date' => $faker->dateTimeBetween('-10 years'),
        'to_date' => $faker->dateTimeBetween('now'),
        'location' => $faker->address,
        'extra_detail' => $faker->paragraph,
    ];
});

$factory->define(App\UserEducation::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () { return factory(App\User::class)->create()->id; },
        'title' => $faker->sentence,
        'college' => $faker->randomElement(['Norton University', 'Panhasatra University']),
        'from_date' => $faker->dateTimeBetween('-10 years', '-5 years'),
        'to_date' => $faker->dateTimeBetween('-4 years'),
        'extra_detail' => $faker->paragraph,
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () { return factory(App\User::class)->create()->id; },
        'company_id' => null,
        'title' => $faker->jobTitle,
        'description' => $faker->paragraph(10),
        'requirement' => $faker->paragraph(10),
        'published_date' => Carbon\Carbon::now(),
        'closing_date' => $faker->dateTimeBetween('now', '2 months'),
    ];
});