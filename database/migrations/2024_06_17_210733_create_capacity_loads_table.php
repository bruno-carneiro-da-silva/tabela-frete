<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('capacity_loads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resolution_id')->constrained('resolutions')->onDelete('cascade');
            $table->foreignId('cargo_category_id')->constrained('cargo_categories')->onDelete('cascade');
            $table->foreignId('load_type_id')->constrained('load_types')->onDelete('cascade');
            $table->integer('number_of_axles');
            $table->integer('distance');
            $table->decimal('cdd_value', 8, 2); // Adicionar coluna cdd_value
            $table->decimal('cd_value', 8, 2); // Adicionar coluna cd_value
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('capacity_loads');
    }
};
