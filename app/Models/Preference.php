<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preference extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'image',
    //     'price',
    //     'category',
    //     'type',
    //     'status',
    //     'user_id',
    // ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
