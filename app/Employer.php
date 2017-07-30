<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Employer extends Model
{
    protected $table = 'employers';

    protected $fillable = [
        'email',
        'name',
        'contact_number',
        'fax',
        'industry_id',
        'website',
        'about',
        'street',
        'city',
        'province',
        'post_code',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
