<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Room_feature extends Model
{
    use HasFactory;

    function room() : BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
