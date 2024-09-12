<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'location', 'duration', 'capacity', 'start_time', 'end_time',
    ];

    public $timestamps = true;


    /**
     * Filter events based on transit duration and buffer.
     *
     * @param int $transitDuration Transit duration in hours
     * @param int $buffer Buffer time in hours
     * @return Collection
     */

    public static function filterByTransitDuration(int $transitDuration, int $buffer)
    {
        // Calculate the buffer and total duration in minutes
        $bufferInMinutes = $buffer * 60;
        $totalDurationInMinutes = ($transitDuration * 60) + $bufferInMinutes;

        // Convert to Carbon instances for comparison
        $now = Carbon::now();

        return self::where(function ($query) use ($now, $totalDurationInMinutes) {
            $query->whereBetween('start_time', [
                $now->format('H:i:s'),
                $now->copy()->addMinutes($totalDurationInMinutes)->format('H:i:s')
            ]);
        })->orWhere(function ($query) use ($now, $totalDurationInMinutes) {
            $query->whereBetween('end_time', [
                $now->format('H:i:s'),
                $now->copy()->addMinutes($totalDurationInMinutes)->format('H:i:s')
            ]);
        })->get();
    }

    public function reservations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
