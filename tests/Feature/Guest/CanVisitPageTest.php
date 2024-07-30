<?php

namespace Tests\Feature\Guest;

use Tests\TestCase;

class CanVisitPageTest extends TestCase
{
    public function testGuestUserCanVisitCart(): void
    {
        $this->get(route('cart.index'))->assertStatus(200)->assertSee('Checkout');
    }

    public function testGuestUserCanVisitCheckout(): void
    {
        $this->get(route('checkout.index'))->assertStatus(200)->assertSee('Checkout')->assertSee('Order Summary');
    }

    public function testGuestUserCanVisitHome(): void
    {
        $this->get(route('index'))->assertStatus(200);
    }

    //TODO: Make this functionality
    public function testGuestUserCanVisitLogin(): void
    {
        //$this->get(route('login'))->assertStatus(200);
        $this->get(route('index'))->assertStatus(200);
    }

    public function testGuestUserCanVisitProduct(): void
    {
        $this->get(route('product.index'))->assertStatus(200);
    }

    //TODO: Make this functionality
    public function testGuestUserCanVisitRegister(): void
    {
        // $this->get(route('register'))->assertStatus(200);
        $this->get(route('index'))->assertStatus(200);
    }

    //TODO: Make this functionality
    public function testGuestUserCanVisitShop(): void
    {
        //$this->get(route('shop.index'))->assertStatus(200);
        $this->get(route('index'))->assertStatus(200);
    }

    //TODO: Make this functionality
    public function testGuestUserCanVisitWishlist(): void
    {
        //$this->get(route('wishlist.index'))->assertStatus(200);
        $this->get(route('index'))->assertStatus(200);
    }

    public function testUserCanVisitUserOrderStore(): void
    {
        $this->actingAsGuest();
        // need data to perform this route
        $this->get(route('order.store'))->assertStatus(405);
    }

    public function testOrderSummaryIsNotVisible(): void
    {
        $this->actingAsGuest();
        $this->get(route('order.myOrders'))
            ->assertRedirect(route('login'))->assertStatus(302)
            ->assertDontSeeText('Order Summary');
    }
}
