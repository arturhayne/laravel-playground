<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Speciality;

class SpecialtyFactory extends Factory
{
    protected $model = Speciality::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
