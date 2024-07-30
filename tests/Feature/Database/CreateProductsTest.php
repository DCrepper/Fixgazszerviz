<?php

namespace Tests\Feature\Database;

use App\Enums\WordpressEndpoints;
use App\Models\Product;
use Automattic\WooCommerce\Client;
use Tests\TestCase; // Add this line to import the Product model

class CreateProductsTest extends TestCase
{
    public Client $client;

    public function testProductImported()
    {
        $this->client = new Client(
            config('app.wordpress_wc_baseurl'),
            config('app.woocommerce_api_key'),
            config('app.woocommerce_api_secret_key'),
            [
                'version' => 'wc/v3',
            ]
        );
        $product = $this->client->get(WordpressEndpoints::PRODUCTS, ['per_page' => 1, 'page' => 1]);
        $product = json_decode(json_encode($product), true);
        // Assert that the product is an array
        $this->assertIsArray($product);

        $product = Product::factory()->create([
            'name' => $product[0]['name'],
            'description' => $product[0]['description'],
            'price' => $product[0]['price'],
            'sku' => $product[0]['sku'],

        ]);
        $this->assertModelExists($product);
    }
}
