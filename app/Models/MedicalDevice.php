<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalDevice extends Model
{
    use HasFactory;

    protected $fillable=[
        'device_name',
        'serial_number',
        'speciality'
    ];
}
