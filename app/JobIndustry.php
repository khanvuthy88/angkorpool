<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobIndustry extends Model
{
    protected $table = 'job_industries';

    protected $fillable = ['name'];

    public $timestamps = false;
}
