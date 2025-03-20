<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;


    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function repas():HasMany
    {
        return $this->hasMany(Repas::class);
    }
}
