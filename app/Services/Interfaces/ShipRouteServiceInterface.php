<?php

namespace App\Services\Interfaces;

use App\Models\Planet;

interface ShipRouteServiceInterface {
    public function fastestTravelTime(Planet $planet);
    public function sonicTravelTime(Planet $planet);
}
