<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Repas extends Model
{
    use HasFactory;

    public function menu():BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
    public function aliments(): BelongsTo
    {
        return $this->belongsTo(Aliment::class);
    }
}
