<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShuttleBooking extends Model
{
    protected $fillable = [
        'reservation_id', 'pickup_time', 'return_time',
    ];

    public function reservation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
