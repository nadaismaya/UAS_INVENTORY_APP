<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::insert([
            [
                'nama' => 'PT Surya Multi Sarana',
                'alamat' => 'Jakarta',
                'telepon' => '081234567890',
                'email' => 'surya@email.com',
            ],
            [
                'nama' => 'CV Mitra Teknologi',
                'alamat' => 'Bandung',
                'telepon' => '081298765432',
                'email' => 'mitra@email.com',
            ],
            [
                'nama' => 'PT Sumber Komputer',
                'alamat' => 'Bekasi',
                'telepon' => '081377788899',
                'email' => 'sumber@email.com',
            ],
        ]);
    }
}