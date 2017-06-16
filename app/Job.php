<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\JobType;
use App\JobIndustry;
use App\Province;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
    	'emp_id',
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
