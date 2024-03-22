<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_id',
        'user_id',
        'status',
        'started_at',
        'closed_at',
    ];

    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Menssage::class);
    }
}



