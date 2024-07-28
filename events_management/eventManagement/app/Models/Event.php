<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'location',
        'date',
        'description_title',
        'description',
        'image',
        'event_type_id',
    ];

    protected $casts = [
        'date' => 'datetime',
        'price' => 'decimal:2',
    ];

    public function eventType(): BelongsTo
    {
        return $this->belongsTo(EventType::class);
    }
}