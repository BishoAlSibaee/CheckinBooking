<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suite;
use App\Models\Building;


class Floor extends Model
{
    use HasFactory;

    public $timestamps = true;

    function suites():HasMany {
        return $this->hasMany(Suite::class);
    }

    function rooms():HasMany {
        return $this->hasMany(Room::class);
    }

    function building():BelongsTo {
        return $this->belongsTo(Building::class);
    }
}
