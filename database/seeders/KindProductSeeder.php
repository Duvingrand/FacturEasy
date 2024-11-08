<?php

namespace Database\Seeders;

use App\Models\KindProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KindProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KindProduct::factory(10)->create();
    }
}
