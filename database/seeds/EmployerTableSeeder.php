<?php

use Illuminate\Database\Seeder;
use App\Employer;
use App\User;

class EmployerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employer::truncate();

        factory(Employer::class)->create([
            'email' => factory(User::class)->create([ 'email' => 'employer@mail.com', 'user_type' => 'EMP' ])->email
        ]);
    }
}
