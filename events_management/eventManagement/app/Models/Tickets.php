<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ticket_type_id', 'quantity', 'eventdata_id'];

    public function ticketType(): BelongsTo
    {
        return $this->belongsTo(TicketType::class);
    }

    public function eventdata(): BelongsTo
    {
        return $this->belongsTo(Eventdata::class);
    }
}
