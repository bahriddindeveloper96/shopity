<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude',
        'longitude',
        'region',
        'district',
        'street',
        'home',
        'user_id',
    ];
}
