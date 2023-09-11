<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    // Create the items table with its columns
    public function up(): void {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('condition');
            $table->string('color');
            $table->timestamps();
        });
    }

    // Drop the table
    public function down(): void {
        Schema::dropIfExists('items');
    }

};
