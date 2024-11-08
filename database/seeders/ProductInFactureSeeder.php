<?php

namespace Database\Seeders;

use App\Models\ProductInFacture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductInFactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductInFacture::factory(10)->create();
    }
}
