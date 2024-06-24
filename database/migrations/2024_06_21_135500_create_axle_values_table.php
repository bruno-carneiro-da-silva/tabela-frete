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
        Schema::create('axle_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_type_id')->constrained('load_types')->onDelete('cascade');
            $table->unsignedInteger('number_of_axles');
            $table->decimal('cdd_value', 8, 2);
            $table->decimal('cd_value', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axle_values');
    }
};
