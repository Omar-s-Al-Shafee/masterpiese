<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Define the relationship with the Languages table
    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    // Define the relationship with the Education table
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    // Define other relationships and methods as needed

}
