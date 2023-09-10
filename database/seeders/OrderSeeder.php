<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder {
    
    // Create 2 fake orders
    public function run(): void {
        Order::factory()->count(2)->create();
    }
}
