<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAlert extends Model
{
    protected $table = 'job_alerts';

    protected $fillable = [
        'employee_id',
        'keyword',
        'industry',
        'job_type',
        'province',
        'mail_frequency',
        'is_paused',
    ];
}
