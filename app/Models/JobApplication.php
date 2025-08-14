<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory;
     protected $table='jobapplications';

    protected $fillable= [
        'name',
        'whatsapp_number',
        'email',
        'passport_number',
        'passport_image',
        'jobname',
        'livingcountry',
        'jobcountry',
        'cv',
        'photo',
    ];

}
