<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpecialOffer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'hotel_id'];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
