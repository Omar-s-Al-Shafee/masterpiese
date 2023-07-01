<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company_id', 'job_title', 'location', 'job_description', 'application_deadline',
    ];

    // Define the relationship with the Company model
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
