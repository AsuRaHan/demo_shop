<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // создать 10 бренда
        //factory(Brand::class, 10)->create(); // lara 7 old version
        Brand::factory()->count(10)->create();
    }
}
