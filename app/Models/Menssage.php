<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menssage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'participation_id',
        'body',
        'type',
    ];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class);
    }
}



