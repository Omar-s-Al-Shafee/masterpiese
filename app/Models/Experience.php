<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'job_title',
        'start_date',
        'end_date',
        'description',
    ];

    // Define the relationship with the User model for the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Company model for the company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
