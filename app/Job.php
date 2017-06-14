<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\JobType;
use App\JobIndustry;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
    	'user_id',
		'company_id',
		'title',
		'description',
		'requirement',
		'published_date',
		'closing_date',
		'industry_id',
		'function_id',
    ];

    public function type()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }

    public function industry()
    {
        return $this->hasOne(JobIndustry::class, 'id', 'industry_id');
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
}
