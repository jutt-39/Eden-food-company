<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiccCard extends Model
{
    use HasFactory;
    protected $table='hiccCards';
    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
