<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'planet_id'];

    public function planet(): BelongsTo
    {
        return $this->belongsTo(Planet::class);
    }

}
