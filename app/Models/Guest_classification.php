<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest_classification extends Model
{
    use HasFactory;
    protected $table = 'guest_classifications';

    function guest_classification_features() : HasMany
    {
        return $this->hasMany(Guest_classification_feature::class);
    }
}
