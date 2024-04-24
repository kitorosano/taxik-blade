<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Admin extends User
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
    ];
}
