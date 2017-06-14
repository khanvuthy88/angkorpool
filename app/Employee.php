<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\EmployeeExperience;
use App\EmployeeEducation;
use ZohoRecruit;

class Employee extends Authenticatable
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

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            // Create a new user into Zoho recruit first before saving into local database.
            ZohoRecruit::setModule('Candidates');
            ZohoRecruit::insertRecords('
                <Candidates>
                    <row no="1">
                        <FL val="Source"></FL>
                        <FL val="Current employer"></FL>
                        <FL val="First Name">' . $user->name . '</FL>
                        <FL val="Last Name">' . $user->surname . '</FL>
                        <FL val="Email">' . $user->email . '</FL>
                        <FL val="Phone">' . $user->phone_number . '</FL>
                        <FL val="Mobile">' . $user->phone_number . '</FL>
                    </row>
                </Candidates>
            ');
        });
    }

    /** Attribute */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getFullNameAttribute()
    {
        return $this->surname . ' ' . $this->name;
    }

    public function getGenderFullAttribute()
    {
        return $this->gender == 'M' ? 'Male' : ($this->gender == 'F' ? 'Female' : null);
    }

    /** Relationship */
    public function experiences()
    {
        return $this->hasMany(EmployeeExperience::class, 'user_id', 'id')->latest();
    }

    public function educations()
    {
        return $this->hasMany(EmployeeEducation::class, 'user_id', 'id')->latest();
    }
}
