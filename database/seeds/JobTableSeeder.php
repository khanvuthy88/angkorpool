<?php

use Illuminate\Database\Seeder;
use App\Job;
use App\JobType;
use App\JobIndustry;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobIndustry::truncate();
        JobType::truncate();
        Job::truncate();

        JobType::insert([
            [ 'caption' => 'Full time'],
            [ 'caption' => 'Part time'],
            [ 'caption' => 'Contract'],
            [ 'caption' => 'Temporary'],
        ]);

        JobIndustry::insert([
            [ 'name' => 'IT Service'],
            [ 'name' => 'Education'],
            [ 'name' => 'Pharma'],
            [ 'name' => 'Real Estate'],
            [ 'name' => 'Manufacturing'],
        ]);
        factory(Job::class, 20)->create();
    }
}
