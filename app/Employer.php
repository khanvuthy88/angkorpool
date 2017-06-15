<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Employer extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $table = 'employers';

    protected $fillable = [
        'email',
        'password',
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

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
