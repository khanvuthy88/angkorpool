<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employers';

    protected $fillable = [
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
}
