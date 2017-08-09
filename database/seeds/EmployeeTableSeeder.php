<?php

use Illuminate\Database\Seeder;
use App\User;
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

        $employee = factory(Employee::class)->create([
            'email' => factory(User::class)->create([ 'email' => 'jobseeker@mail.com', 'user_type' => 'CAN' ] )->email
        ]);
        factory(EmployeeEducation::class, 3)->create([ 'employee_id' => $employee->id ]);
        factory(EmployeeExperience::class, 6)->create([ 'employee_id' => $employee->id ]);
    }
}
