<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Client extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
