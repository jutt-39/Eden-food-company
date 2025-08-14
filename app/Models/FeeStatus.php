<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class FeeStatus extends Model
{
    protected $table='feeStatus';
    use HasFactory;

    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
