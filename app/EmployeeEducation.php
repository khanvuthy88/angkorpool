<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EmployeeEducation extends Model
{
    protected $table = 'employee_educations';

    protected $fillable = [
        'user_id',
        'title',
        'college',
        'from_date',
        'to_date',
        'extra_detail',
    ];

    public function getFromDateMYAttribute()
    {
        return (new Carbon($this->from_date))->format('M/Y');
    }

    public function getToDateMYAttribute()
    {
        if(is_null($this->to_date)) return 'Present';

        return (new Carbon($this->to_date))->format('M/Y');
    }
}
