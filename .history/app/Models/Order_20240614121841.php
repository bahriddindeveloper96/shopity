<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'comment',
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
    public function deliveryType():BelongsTo
    {
        return $this->belongsTo(DeliveryMethod::class);
    }
    public function paymentMethod()
    {
        return $this->belongsTo(paymentMethod::class);
    }
}
