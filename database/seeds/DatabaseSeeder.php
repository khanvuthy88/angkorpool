<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $this->call(ProvinceTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(EmployerTableSeeder::class);
        $this->call(JobTableSeeder::class);
    }
}
