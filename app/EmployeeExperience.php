<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EmployeeExperience extends Model
{
    protected $table = 'employee_experiences';

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

    public function getFromDateMYAttribute()
    {
        return (new Carbon($this->from_date))->format('M/Y');
    }

    public function getToDateMYAttribute()
    {
        if(is_null($this->to_date))
            return 'Present';
        return (new Carbon($this->to_date))->format('M/Y');
    }
}
