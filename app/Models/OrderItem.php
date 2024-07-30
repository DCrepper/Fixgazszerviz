<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $tax_class
 * @property string $subtotal
 * @property string $subtotal_tax
 * @property string $total
 * @property string $total_tax
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Order $order
 * @property Product $product
 */
class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $casts = [
        'product_id' => 'int',
        'quantity' => 'int',
    ];

    protected $fillable = [
        'order_id',
        'product_id',
        'tax_class',
        'subtotal',
        'subtotal_tax',
        'total',
        'total_tax',
        'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
