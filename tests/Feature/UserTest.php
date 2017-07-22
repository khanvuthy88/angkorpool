<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    public function register_an_user_success()
    {
    	$user = [
    		'email' => 'narong@mail.com',
    	];

        $response = $this->post('user/register', array_merge($user, ['password' => 'crocodile', 'password_confirmation' => 'crocodile']));

        $response->assertStatus(302);
       	$this->assertDatabaseHas('users', $user);
    }
}
