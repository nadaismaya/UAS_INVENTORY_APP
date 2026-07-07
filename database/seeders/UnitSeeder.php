<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        Unit::insert([
            ['nama' => 'Unit'],
            ['nama' => 'Pcs'],
            ['nama' => 'Box'],
            ['nama' => 'Pack'],
        ]);
    }
}