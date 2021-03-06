<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'user_type' => $faker->randomElement(['CAN', 'EMP', 'REC']),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employer::class, function (Faker\Generator $faker) {
    return [
        'email' => function () { return factory(App\User::class)->create([ 'user_type' => 'EMP' ])->email; },
        'name' => $faker->name,
        'contact_number' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'industry_id' => 1,
        'website' => $faker->domainName,
        'about' => $faker->paragraph,
        'street' => $faker->streetAddress,
        'city' => null,
        'province' => 'Phnom Penh',
        'post_code' => $faker->postcode,
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'surname' => $faker->lastName,
        'name' => $faker->firstName,
        'email' =>  function () { return factory(App\User::class)->create([ 'user_type' => 'CAN' ])->email; },
        'gender' => $faker->randomElement(['M', 'F']),
        'dob'=> $faker->dateTimeBetween('-30 years', '-20 years'),
        'marital_status' => null,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
    ];
});

$factory->define(App\EmployeeExperience::class, function (Faker\Generator $faker) {
    return [
        'employee_id' => function () { return factory(App\Employee::class)->create()->id; },
        'title' => $faker->jobTitle,
        'company_name' => $faker->company,
        'from_date' => $faker->dateTimeBetween('-10 years'),
        'to_date' => $faker->dateTimeBetween('now'),
        'location' => $faker->address,
        'extra_detail' => $faker->paragraph,
    ];
});

$factory->define(App\EmployeeEducation::class, function (Faker\Generator $faker) {
    return [
        'employee_id' => function () { return factory(App\Employee::class)->create()->id; },
        'title' => $faker->sentence,
        'college' => $faker->randomElement(['Norton University', 'Panhasatra University']),
        'from_date' => $faker->dateTimeBetween('-10 years', '-5 years'),
        'to_date' => $faker->dateTimeBetween('-4 years'),
        'extra_detail' => $faker->paragraph,
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'employer_id' => function () { return factory(App\Employer::class)->create()->id; },
        'title' => $faker->jobTitle,
        'description' => $faker->paragraph(100),
        'published_date' => Carbon\Carbon::now(),
        'closing_date' => $faker->dateTimeBetween('now', '2 months'),
        'industry_id' => 1,
        'salary' => $faker->randomElement(['$300 - $500', '$500 - 1000$', '$1000+']),
        'status' => 1,
        'city' => 'Phnom Penh',
        'province_code' => 'PNP',
        'work_experience' => $faker->randomElement(['0-1 year', '1-3 years', '5+ years']),
        'job_type_id' => 1,
        'number_of_positions' => $faker->randomNumber(2),
    ];
});

$factory->define(App\JobIndustry::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\JobAlert::class, function (Faker\Generator $faker) {
    return [
        'employee_id' => function () { return factory(App\Employee::class)->create()->id; },
        'keyword' => $faker->word,
        'industry_id' => $faker->randomElement([1, 2, 3]),
        'job_type_id' => $faker->randomElement([1, 2, 3]),
        'province_code' => 'PNP',
        'mail_frequency' => 'Daily',
        'is_paused' => false,
    ];
});

$factory->define(App\AdminUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->username,
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
    ];
});