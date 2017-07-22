<?php

use Illuminate\Database\Seeder;
use App\Employee;

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
        factory(Employee::class, 5)->create();
    }
}
