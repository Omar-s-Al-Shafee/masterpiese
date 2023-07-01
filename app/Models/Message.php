<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'sender_id',
        'recipient_id',
        'content',
        'sent_at',
    ];

    // Define the relationship with the User model for sender
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Define the relationship with the User model for recipient
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
