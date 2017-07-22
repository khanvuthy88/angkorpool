<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\EmployeeEducation;
use App\EmployeeExperience;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        factory(Employee::class)->create([ 'email' => 'jobseeker@mail.com']);
        factory(EmployeeEducation::class, 3)->create([ 'user_id' => 1 ]);
        factory(EmployeeExperience::class, 6)->create([ 'user_id' => 1 ]);

        factory(Employee::class, 5)->create();
    }
}
