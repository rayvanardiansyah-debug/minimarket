<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan Model di-import

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'nama' => 'Laptop Asus Vivobook',
            'harga' => 8500000
        ]);

        Product::create([
            'nama' => 'Mouse Wireless Logitech',
            'harga' => 150000
        ]);

        Product::create([
            'nama' => 'Keyboard Mechanical',
            'harga' => 450000
        ]);
    }
}
