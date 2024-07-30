<?php

namespace Database\Factories;

use App\Models\PaymentGateWay;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paymentGateWay = PaymentGateWay::factory();

        return [
            'user_id' => User::factory(),
            // phpcs:ignore Undefined property
            'payment_method' => $paymentGateWay->payment_gate_way_id,
            'payment_method_title' => $paymentGateWay->title,
            'set_paid' => fake()->boolean,
            'billing_first_name' => fake()->firstName,
            'billing_last_name' => fake()->lastName,
            'billing_address_1' => fake()->streetAddress,
            'billing_address_2' => fake()->secondaryAddress,
            'billing_city' => fake()->city,
            'billing_state' => fake()->state,
            'billing_postcode' => fake()->postcode,
            'billing_country' => fake()->country,
            'billing_email' => fake()->safeEmail,
            'billing_phone' => fake()->phoneNumber,
            'shipping_first_name' => fake()->firstName,
            'shipping_last_name' => fake()->lastName,
            'shipping_address_1' => fake()->streetAddress,
            'shipping_address_2' => fake()->secondaryAddress,
            'shipping_city' => fake()->city,
            'shipping_state' => fake()->state,
            'shipping_postcode' => fake()->postcode,
            'shipping_country' => fake()->country,
            'shipping_tracking_number' => fake()->randomNumber(8),
            'shipping_lines_method_id' => fake()->randomDigitNotNull,
            'shipping_lines_method_title' => fake()->word,
            'shipping_lines_total' => fake()->randomFloat(2, 0, 1000),
            'order_id' => fake()->randomNumber(8),
            'order_key' => fake()->uuid,
            'order_status' => fake()->randomElement(['pending', 'processing', 'completed', 'on-hold', 'cancelled', 'refunded', 'failed']),
            'order_currency' => fake()->currencyCode,
            'order_total' => fake()->randomFloat(2, 0, 1000),
            'order_item_count' => fake()->numberBetween(1, 10),
            'customer_note' => fake()->sentence,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
