<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOpeningStatus extends Model
{
    protected $table = 'job_opening_statuses';

    protected $fillable = ['caption'];

    public $timestamps = false;
}
