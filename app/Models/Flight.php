<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id', 'flight_number', 'arrival_time', 'departure_time', 'connecting_flight_id'
    ];

//    public function getTransitDurationAttribute()
//    {
//        return $this->transit_duration();
//    }
}
