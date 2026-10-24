<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['title', 'description', 'status', 'priority', 'type', 'assigned_to'])]
class Issues extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
