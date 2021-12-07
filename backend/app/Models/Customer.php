<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    use HasFactory;
    protected $fillable = [
        'SSN',
        'name',
        'slug',
        'DOB',
        'sex',
        'phone1',
        'phone2',
        'phone3'
    ];
}
