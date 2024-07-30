<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentGateWay>
 */
class PaymentGateWayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_gate_way_id' => $this->faker->randomElement(['bacs', 'cheque', 'cod', 'paypal', 'stripe']),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'enabled' => $this->faker->boolean,
            'method_title' => $this->faker->sentence,
            'method_description' => $this->faker->paragraph,
        ];
    }
}
