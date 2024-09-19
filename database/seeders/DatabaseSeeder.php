<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
    
        \App\Models\Customer::factory(50)->create();
        // \App\Models\Customer::factory(50)->create();
        // \App\Models\Product::factory(50)->create();
        // \App\Models\StockAdjustment::factory(50)->create();
        // \App\Models\Order::factory(50)->create();
    }
}
