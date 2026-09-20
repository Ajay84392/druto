<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardRequest extends Model
{
    protected $guarded = [];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
