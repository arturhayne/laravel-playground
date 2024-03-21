<?php

namespace App\Services;

use App\Models\Planet;
use App\Services\Interfaces\ShipRouteServiceInterface;

class BudgetShipRouteService implements ShipRouteServiceInterface
{
    public $shipSpeed = 5;

    public function fastestTravelTime(Planet $planet): int
    {
        return $planet->distance / $this->shipSpeed;
    }

    public function sonicTravelTime(Planet $planet): int
    {
        return $planet->distance / ($this->shipSpeed / 2);
    }
}

