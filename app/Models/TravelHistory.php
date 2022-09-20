<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'driver_id',
        'passenger_id',
        'start_location_id',
        'destination_location_id',
    ];


 
    /**
     * Get the user that owns the TravelHistory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }
    /**
     * Get the user that owns the TravelHistory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function passenger()
    {
        return $this->belongsTo(User::class, 'passenger_id', 'id');
    }
    /**
     * Get the user that owns the TravelHistory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function start_location()
    {
        return $this->belongsTo(Location::class, 'start_location_id', 'id');
    }
    /**
     * Get the user that owns the TravelHistory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destination_location()
    {
        return $this->belongsTo(Location::class, 'destination_location_id', 'id');
    }
}
