<?php

namespace Tests\Feature\Guest;

use App\Enums\ShippingMethods;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\PaymentGateWay;
use Automattic\WooCommerce\Client;
use Tests\TestCase;

class GuestOrderTest extends TestCase
{
    /**
     * User Order form page
     */

    /**
     * Test case to verify that a guest user can place an order.
     */
    public function testGuestUserCanPlaceOrder(): void
    {
        $this->actingAsGuest();
        $cart = Cart::factory()
            ->has(CartItem::factory()->count(10))
            ->create();
        $paymentGateWay = PaymentGateWay::factory()->create();

        $response = $this->post(route('order.store'), [
            'billing' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'address_1' => '969 Market',
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US',
                'email' => 'john.doe@example.com',
                'phone' => '(555) 555-5555',

            ],
            'shipping' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'address_1' => '969 Market',
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US',
            ],
            'shipping_lines' => ShippingMethods::FLATRATE,
            'line_items' => $cart->products()->get()->map(function ($item) {
                return [
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                ];
            })->toArray(),
            'payment_method' => $paymentGateWay->payment_gate_way_id,
        ]);
        $response->assertStatus(302);
        $response->assertSessionHas('success', 'Order created successfully');
        $response->assertRedirect(route('order.thankyou'));
        $client = new Client(
            config('app.wordpress_wc_baseurl'),
            config('app.woocommerce_api_key'),
            config('app.woocommerce_api_secret_key'),
            [
                'version' => 'wc/v3',
            ]
        );
        $order = Order::latest()->first();
        $client->delete('orders/'.$order->order_id, ['force' => true]);
        $lastResponse = $client->http->getResponse();
        $this->assertEquals(200, $lastResponse->getCode());
    }
}
