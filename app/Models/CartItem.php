<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'carts_items';

    protected $fillable = [
        'product_id',
        'cart_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    protected $casts = [
        'product_id' => 'int',
        'cart_id' => 'int',
        'quantity' => 'int',
    ];
}
