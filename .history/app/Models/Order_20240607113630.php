<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillabe = [        
        'comment',
        'user_id',
        'delivery_method_id',
        'payment_type_id',
        'sum',
        'products',
        'address',
    ];
     protected $casts = [
        'products' => 'array',
        'address' => 'array',
    ];
}