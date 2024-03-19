<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public function providers()
    {
        return $this->belongsToMany(User::class, 'provider_specialty', 'specialty_id', 'provider_id');
    }
}
