<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferLetter extends Model
{
    use HasFactory;
     protected $table='offerLetters';

    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
