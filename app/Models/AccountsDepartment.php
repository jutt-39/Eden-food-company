<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountsDepartment extends Model

{
    use HasFactory;
    protected $table='accountsdepartments';

    protected $fillable = [
        'name',
        'passport_number',
        'photo'
    ];
}
