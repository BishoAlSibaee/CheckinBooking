<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class User_permission extends Model
{
    use HasFactory;

    protected $table = 'user_permissions';
    public $timestamps = true;

    function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function permission() : BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
