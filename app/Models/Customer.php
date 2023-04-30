<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable =[

        "registration_number", "email", "full_name",
        "depart", "hire_date",
        "city", "address", "phone"
    ];
}
