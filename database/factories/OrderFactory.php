<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory {
    
    // Generate fake orders
    public function definition(): array {
        return [
            'product_name' => 'Breezy ' . fake()->city() . ', ' . fake()->colorName,
            'quantity' => fake()->numberBetween(1, 4),
            'status_id' => 0
        ];
    }

    protected $model = Order::class;
}
