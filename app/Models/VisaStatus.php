<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaStatus extends Model
{
    use HasFactory;
    protected $table='visaStatus';
    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
