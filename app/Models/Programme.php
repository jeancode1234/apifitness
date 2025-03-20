<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Programme extends Model
{
    use HasFactory;


    public function menu():HasMany
    {
        return $this->hasMany(Menu::class);
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function abonnement():HasMany
    {
        return $this->hasMany(Abonnement::class);
    }
}
