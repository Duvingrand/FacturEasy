<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Facture;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductInFacture>
 */
class ProductInFactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory(),
            'product_id' => Product::factory(),
            'facture_id' => Facture::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
