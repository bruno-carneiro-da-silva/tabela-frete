<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('FreightCost', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_type_id')->constrained('cargo_type')->onDelete('cascade');
            $table->foreignId('cost_coefficient_id')->constrained('cost_coefficient')->onDelete('cascade');
            $table->decimal('kilometers', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('FreightCost');
    }
};
