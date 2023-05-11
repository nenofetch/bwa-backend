<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->address(),
            'payment' => 'MANUAL',
            'total_price' => (rand(1000, 2000)),
            'shipping_price' => (rand(18000, 20000)),
            'status' => 'PENDING',
        ];
    }
}
