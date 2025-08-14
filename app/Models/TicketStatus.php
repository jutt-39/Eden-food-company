<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    use HasFactory;
    protected $table='ticketStatus';
    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
