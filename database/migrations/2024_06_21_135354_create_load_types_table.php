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
        Schema::create('load_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_category_id')->constrained('cargo_categories')->onDelete('cascade');
            $table->string('name'); // Ex: Granel sólido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('load_types');
    }
};
