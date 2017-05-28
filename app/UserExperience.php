<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    protected $table = 'user_experiences';

    protected $fillable = [
    	'user_id',
		'title',
		'company_id',
		'company_name',
		'from_date',
		'to_date',
		'location',
		'extra_detail',
    ];
}
