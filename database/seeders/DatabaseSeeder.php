<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
