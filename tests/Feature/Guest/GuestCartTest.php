<?php

namespace Tests\Feature\Guest;

use App\Http\Controllers\CartController;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Tests\TestCase;

class GuestCartTest extends TestCase
{
    use InteractsWithDatabase;

    public function testGuestAddRemoveProductFromCart()
    {
        $this->actingAsGuest();
        $cart = CartController::createCart();
        // Create a product
        $product = Product::factory()->create();
        $this->assertModelExists($product);
        // Add the product to the cart
        $response = $this->post(route('cart.add', ['product' => $product->id]));
        $cart_item = CartItem::where('product_id', $product->id)->where('cart_id', $cart->id)->first();
        $response->assertStatus(302);
        $this->assertModelExists($cart_item);
        // Remove the product from the cart
        $response = $this->delete(route('cart.remove', ['product' => $product->id]));
        $response->assertStatus(302);
        $this->assertModelMissing($cart_item);
    }

    public function testGuestIsLoggedOut()
    {
        $this->assertGuest();
    }
}
