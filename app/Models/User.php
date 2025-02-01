<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // The attributes that are mass assignable
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'role',
        'age',
        'city',
        'state',
        'postal_code',
        'gender', 
        'marital_status',
        'dp_path',
        'fiverr_link',
        'upwork_link',
        'linkedin_link',
        'facebook_link',
        'instagram_link',
        'other_platform',
        'remember_token'
    ];
    

    // Hidden fields (often used for APIs)
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function skills()
{
    return $this->hasMany(Skill::class);
}


public function job()
{
    return $this->hasMany(Job::class);
}

public function educations()
{
    return $this->hasMany(Education::class);
}
public function languages()
{
    return $this->hasMany(Language::class, 'user_id');
}


}
