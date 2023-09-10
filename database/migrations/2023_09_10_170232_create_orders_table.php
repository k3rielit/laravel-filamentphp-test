<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    // Run the migrations, creating the orders table with its columns.
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('quantity');
            $table->integer('status_id');
            $table->timestamps();
        });
    }

    // Reverse the migrations, dropping the orders table.
    public function down(): void {
        Schema::dropIfExists('orders');
    }
    
};
