<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $fillable = [
        'name', 'description', 'location', 'duration', 'capacity', 'start_time', 'end_time',
    ];

    public $timestamps = true;

    public function reservations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
