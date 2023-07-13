<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';

    protected $fillable = ['name', 'university_id', 'image'];

    // Define the relationship with the University model
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
