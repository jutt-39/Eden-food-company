<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPermit extends Model
{
    use HasFactory;
    protected $table='workPermits';
    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
