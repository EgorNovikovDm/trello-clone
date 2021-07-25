<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Board extends Model
{
    use HasFactory;

    public function lists():HasMany {
        $this->hasMany(CardList::class, 'board_id');
    }

    public function owner(): BelongsTo {
        $this->belongsTo(User::class, 'owner_id');
    }
}