<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelonsTo;

class UserAddress extends Model
{
    protected $fillable = [
        'address'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
