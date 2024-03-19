<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition()
    {
        return [
            'patient_id' => User::factory(),
            'provider_id' => User::factory(),
            'datetime' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => 'pending', // or any other default status you prefer
        ];
    }
}
