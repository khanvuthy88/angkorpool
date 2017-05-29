<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\UserExperience;
use App\UserEducation;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'name', 'email', 'password', 
        'gender', 'dob', 'marital_status', 'phone_number',
        'address', 'profile_photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /** Attribute */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getFullNameAttribute()
    {
        return $this->surname . ' ' . $this->name;
    }

    /** Relationship */
    public function experiences()
    {
        return $this->hasMany(UserExperience::class, 'user_id', 'id');
    }

    public function educations()
    {
        return $this->hasMany(UserEducation::class, 'user_id', 'id');
    }
}
