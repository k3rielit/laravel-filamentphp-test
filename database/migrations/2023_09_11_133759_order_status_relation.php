<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    // Set the regular number status_id column as the foreign key for status.id
    public function up(): void {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('status_id')
                ->change()
                ->nullable()
                ->constrained('statuses')
                ->cascadeOnDelete();
        });
    }

    // Reverses the process, setting the status_id back to a regular number
    public function down(): void {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('status_id')
                ->change()
                ->nullable();
        });
    }

};
