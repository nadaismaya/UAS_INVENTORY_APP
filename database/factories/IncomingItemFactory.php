<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IncomingItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'item_id' => Item::factory(),
            'user_id' => User::factory(),
            'tanggal' => fake()->date(),
            'jumlah' => fake()->numberBetween(1,20),
            'keterangan' => fake()->sentence(),
        ];
    }
}