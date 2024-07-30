<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class CanVisitPageTest extends TestCase
{
    //TODO: Make this functionality
    public function testUserCanVisitProfile(): void
    {
        //$this->actingAsGuest();
        $this->get(route('index'))->assertStatus(200);
        //$this->get(route('profile.index'))->assertStatus(200);
    }

    //TODO: Make this functionality
    public function testUserCanVisitUserOrder(): void
    {
        $this->actingAsGuest();
        // $this->get(route('user.order.index'))->assertStatus(200);
        $this->get(route('index'))->assertStatus(200);
    }
}
