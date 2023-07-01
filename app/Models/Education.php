<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'user_id',
        'university_id',
        'degree',
        'field_of_study',
        'start_year',
        'end_year',
    ];

    // Define the relationship with the User model for the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the University model for the university
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}

