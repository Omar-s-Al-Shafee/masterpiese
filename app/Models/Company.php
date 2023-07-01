<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'industry',
        'headquarters',
        'founded_year',
        'website',
        'description',
    ];

    // Define the relationship with the User model for employees
    public function employees()
    {
        return $this->hasMany(User::class, 'company_id');
    }
}
