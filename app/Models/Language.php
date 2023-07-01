<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'user_id',
        'language_name',
        'proficiency',
    ];

    // Define the relationship with the User model for the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
