<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
