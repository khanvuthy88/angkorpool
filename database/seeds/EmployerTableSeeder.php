<?php

use Illuminate\Database\Seeder;
use App\Employer;

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

        factory(Employer::class)->create([ 'email' => 'employer@mail.com']);
        factory(Employer::class, 5)->create();
    }
}
