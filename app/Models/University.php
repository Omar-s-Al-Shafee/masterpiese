<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name',
        'location',
        'established_year',
        'website',
        'description',
        'image',
    ];

    // Define the relationship with the User model for the users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
