<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\JobIndustry;
use App\JobType;

class JobAlert extends Model
{
    protected $table = 'job_alerts';

    protected $fillable = [
        'employee_id',
        'keyword',
        'industry_id',
        'job_type_id',
        'province_code',
        'mail_frequency',
        'is_paused',
    ];

    // protected $appends = [ '' ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function industry()
    {
        return $this->hasOne(JobIndustry::class, 'id', 'industry_id');
    }

    public function job_type()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }
}
