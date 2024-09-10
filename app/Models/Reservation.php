<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'event_id', 'number_of_people', 'reservation_time',
    ];

    public function event(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function shuttleBooking()
    {
        return $this->hasOne(ShuttleBooking::class);
    }
}
