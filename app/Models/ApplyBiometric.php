<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplyBiometric extends Model
{
    use HasFactory;
    protected $table='applyBiometrics';

    protected $fillable = [
        'name',
        'passport_number',
        'whatsapp_number',
        'livingcountry',
        'date',
    ];
}
