<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LmiaApproval extends Model
{
    use HasFactory;
    protected $table='lmiaApprovals';
    protected $fillable = [
        'letter',
        'email',
        'passport_number',

    ];
}
