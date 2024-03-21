<?php

namespace App\Services;

use App\Models\Planet;
use App\Services\Interfaces\ShipRouteServiceInterface;

class TurboShipRouteService implements ShipRouteServiceInterface
{
    public $shipSpeed = 10;

    /**
     * returns the fastest time to travel to a planet in hours
     */
    public function fastestTravelTime(Planet $planet): int
    {
        return $planet->distance / $this->shipSpeed;
    }

    /**
     * returns the time to travel to a planet while sightseeing in hours
     */
    public function sonicTravelTime(Planet $planet): int
    {
        return $planet->distance / ($this->shipSpeed / 2);
    }
}
