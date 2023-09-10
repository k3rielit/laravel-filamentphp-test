<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    // Run the migrations, creating the statuses table with its columns.
    public function up(): void {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    // Reverse the migrations, dropping the statuses table.
    public function down(): void {
        Schema::dropIfExists('statuses');
    }

};
