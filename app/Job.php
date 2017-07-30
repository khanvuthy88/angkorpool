<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\JobType;
use App\JobIndustry;
use App\Province;
use App\Employer;
use App\Employee;
use App\JobAlert;
use ZohoRecruit;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
    	'employer_id',
        'title',
        'description',
        'salary',
        'status',
        'city',
        'province_code',
        'work_experience',
        'job_type_id',
        'number_of_positions',
        'published_date',
        'closing_date',
        'industry_id',
    ];

    protected $dates = [
        'published_date',
        'closing_date',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($job) {
            // // Create a new job into Zoho recruit first before saving into local database.
            // ZohoRecruit::setModule('JobOpenings');
            // ZohoRecruit::insertRecords('
            //     <JobOpenings>
            //         <row no="1">
            //             <FL val="Posting Title">' . $job->title . '</FL>
            //             <FL val="Date Opened">' . $job->published_date . '</FL>
            //             <FL val="Target Date">' . $job->closing_date . '</FL>
            //             <FL val="Job Type">' . JobType::find($job->job_type_id)->caption . '</FL>
            //             <FL val="City">' . $job->city . '</FL>
            //             <FL val="Province">' . Province::where('code', $job->province_code)->first()->name . '</FL>
            //             <FL val="Salary">' . $job->salary . '</FL>
            //             <FL val="Work Experience">' . $job->work_experience . '</FL>
            //             <FL val="Industry">' . JobIndustry::find($job->industry_id)->name . '</FL>
            //             <FL val="Number of Positions">' . $job->number_of_positions . '</FL>
            //             <FL val="Job Description">' . $job->description . '</FL>
            //         </row>
            //     </JobOpenings>
            // ');
        });
    }

    public function type()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }

    public function industry()
    {
        return $this->hasOne(JobIndustry::class, 'id', 'industry_id');
    }

    public function province()
    {
        return $this->hasOne(Province::class, 'code', 'province_code');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_job_applies')->withPivot('applied_date');
    }

    public function jobAlerts()
    {
        return $this->hasMany(JobAlert::class, 'employee_id');
    }

    public function scopePublished($query)
    {
    	$query->where('published_date', '!=', null)
    			->where('closing_date', '>', Carbon::now());
    }

    public function getJobTypeAttribute()
    {
        $job_type = $this->type;
        return ! is_null($job_type) ? $job_type->caption : null;
    }

    public function getIndustryNameAttribute()
    {
        $industry = $this->industry;
        return ! is_null($industry) ? $industry->name : null;
    }

    public function getIsPublishedAttribute()
    {
        return ! is_null($this->published_date);
    }

    public function getLocationAttribute()
    {
        if(is_null($this->province)) return null;

        return $this->province->name;
    }
}
