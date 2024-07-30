<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d';

    protected $casts = [
        'set_paid' => 'bool',
        'created_at' => 'date',
    ];

    protected $fillable = [
        'user_id',
        'payment_method',
        'payment_method_title',
        'set_paid',
        'billing_first_name',
        'billing_last_name',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_country',
        'billing_email',
        'billing_phone',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_state',
        'shipping_postcode',
        'shipping_country',
        'shipping_tracking_number',
        'shipping_lines_method_id',
        'shipping_lines_method_title',
        'shipping_lines_total',
        'order_id',
        'order_key',
        'order_status',
        'order_currency',
    ];

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
