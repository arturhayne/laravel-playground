<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'distance',
    ];

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }
}
