<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'location',
        'birthdate',
        'website',
    ];

    // Define the relationship with the User model for the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
