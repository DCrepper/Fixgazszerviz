<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UserOrderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testUserCanOrder(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
