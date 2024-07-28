<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_Type extends Model
{
    use HasFactory;

    protected $table = 'ticket__types';

    protected $fillable = ['name', 'Price'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
