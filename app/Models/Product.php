<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'product_id',
        'name',
        'slug',
        'type',
        'status',
        'catalog_visibility',
        'description',
        'short_description',
        'sku',
        'price',
        'regular_price',
        'sale_price',
        'stock_quantity',
        'stock_status',
        'weight',
        'length',
        'width',
        'height',
        'shipping_class',
    ];

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }
}
