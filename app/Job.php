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

    public function scopePublished($query)
    {
    	$query->where('published_date', '!=', null)
    			->where('closing_date', '>', Carbon::now());
    }

    public function getJobTypeAttribute()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id')->first()->caption;
    }

    public function getIndustryAttribute()
    {
        return $this->hasOne(JobIndustry::class, 'id', 'industry_id')->first()->name;
    }
}
