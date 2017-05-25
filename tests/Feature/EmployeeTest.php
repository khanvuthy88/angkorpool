<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmployeeTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    public function register_an_employee_success()
    {
    	$employee = [
    		'surname' => 'Chhin',
    		'name' => 'Narong',
    		'email' => 'narong@mail.com',
    		'gender' => 'M',
    		'dob' => '1980-01-06',
    		'marital_status' => 'Married',
    		'phone_number' => '0978976543',
    		'address' => 'No 120, Norodom Blvd., Tonle Basac, Chamkarmorn',
    	];

        $response = $this->post('employee/register', array_merge($employee, ['password' => 'crocodile', 'password_confirmation' => 'crocodile']));

        $response->assertStatus(302);
       	$this->assertDatabaseHas('employees', $employee);
    }

    /** @test */
    public function register_an_employee_fail_validation()
    {
    	$employee = [
    		'surname' => '',
    		'name' => '',
    		'email' => '',
    		'gender' => '',
    		'dob' => '',
    	];

        $response = $this->post('employee/register', $employee);

        $response->assertStatus(302);
       	$this->assertDatabaseMissing('employees', $employee);
    }
}
