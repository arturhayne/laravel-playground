<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'distance' => $this->distance,
            'image' => $this->image,
            'hotels_count' => $this->whenLoaded('hotels_count', $this->hotels_count),
            'fastest_travel_time' => $this->whenLoaded('fastestTravelTime', $this->fastestTravelTime()),
            'scenic_travel_time' => $this->whenLoaded('scenicTravelTime', $this->fastestTravelTime()),
        ];
    }
}
