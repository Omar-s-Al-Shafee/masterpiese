<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $fillable = [
        'user_id', 'connection_id', 'status',
    ];

    // Define the relationship with the User model (self-referential relationship)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the User model (self-referential relationship)
    public function connection()
    {
        return $this->belongsTo(User::class, 'connection_id');
    }
}
