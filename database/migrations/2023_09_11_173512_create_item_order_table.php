<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    // Create the pivot table for Iten and Order
    public function up(): void {
        Schema::create('item_order', function (Blueprint $table) {
            $table->foreignId('item_id')->constrained(
                table: 'items'
            )->cascadeOnDelete();
            $table->foreignId('order_id')->constrained(
                table: 'orders'
            )->cascadeOnDelete();
        });
    }

    // Drop the pivot table
    public function down(): void {
        Schema::dropIfExists('item_order');
    }

};
