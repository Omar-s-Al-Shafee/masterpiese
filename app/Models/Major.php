<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'major';

    protected $fillable = ['name', 'university_id', 'image'];

    // Define the relationship with the University model
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
