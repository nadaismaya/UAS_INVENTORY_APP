<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([

            [
                'nama' => 'Elektronik',
                'deskripsi' => 'Peralatan elektronik'
            ],

            [
                'nama' => 'ATK',
                'deskripsi' => 'Alat tulis kantor'
            ],

            [
                'nama' => 'Aksesoris Komputer',
                'deskripsi' => 'Perangkat pendukung komputer'
            ],

            [
                'nama' => 'Jaringan',
                'deskripsi' => 'Peralatan jaringan komputer'
            ],

            [
                'nama' => 'Furniture',
                'deskripsi' => 'Perabot kantor'
            ],

        ]);
    }
}