<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_barang' => strtoupper(fake()->unique()->bothify('BRG###')),
            'nama_barang' => fake()->words(2, true),
            'category_id' => Category::factory(),
            'unit_id' => Unit::factory(),
            'stok' => fake()->numberBetween(1,100),
            'harga' => fake()->numberBetween(50000,10000000),
        ];
    }
}