<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Company extends User
{
    use HasFactory;
    protected $fillable = [
        'code'
    ];
}
