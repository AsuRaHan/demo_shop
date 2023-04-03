<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // создать 30 товаров
        //factory(Product::class, 30)->create(); // lara 7 old version
        Product::factory()->count(30)->create();
    }
}
