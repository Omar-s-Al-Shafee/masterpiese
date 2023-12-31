<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];
    
    protected $guarded = ['id', 'role_id'];


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

    public function about()
    {
        return $this->hasMany(About::class);
    }

    // Define other relationships and methods as needed

}
