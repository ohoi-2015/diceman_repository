<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'is_active',
    ];

    public function dice(): BelongsTo
    {
        return $this->belongsTo(Dice::class);
    }
}
