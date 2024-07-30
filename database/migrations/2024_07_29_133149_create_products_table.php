<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_id')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('type')->nullable();
            $table->text('status')->nullable();
            $table->text('catalog_visibility')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('sku')->nullable(false)->default(Str::uuid(20));
            $table->text('price')->nullable();
            $table->text('regular_price')->nullable();
            $table->text('sale_price')->nullable();
            $table->text('stock_quantity')->nullable();
            $table->text('stock_status')->nullable();
            $table->text('weight')->nullable();
            $table->text('length')->nullable();
            $table->text('width')->nullable();
            $table->text('height')->nullable();
            $table->text('shipping_class')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
