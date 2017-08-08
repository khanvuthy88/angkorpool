<?php

use Illuminate\Database\Seeder;
use App\Job;
use App\JobType;
use App\JobIndustry;
use App\JobOpeningStatus;
use App\Employer;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobType::truncate();
        JobOpeningStatus::truncate();
        JobIndustry::truncate();
        Job::truncate();

        JobType::insert([
            [ 'caption' => 'Full time' ],
            [ 'caption' => 'Part time' ],
            [ 'caption' => 'Contract' ],
            [ 'caption' => 'Temporary' ],
        ]);

        JobOpeningStatus::insert([
            [ 'caption' => 'In-progress'],
            [ 'caption' => 'Cancelled'],
            [ 'caption' => 'Declined'],
            [ 'caption' => 'Inactive'],
        ]);

        JobIndustry::insert([
            [ 'name' => 'IT Service' ],
            [ 'name' => 'Education' ],
            [ 'name' => 'Pharma' ],
            [ 'name' => 'Real Estate' ],
            [ 'name' => 'Manufacturing' ],
        ]);

        factory(Job::class, 1)->create([
            'employer_id' => Employer::where('email', 'employer@mail.com')->first()->id
        ]);
    }
}
