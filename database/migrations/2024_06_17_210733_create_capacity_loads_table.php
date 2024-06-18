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
            $table->string('load_type');
            $table->enum('cost_coefficient', ['CC', 'CCD']);
            $table->string('unit');
            $table->json('number_of_axles');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('capacity_loads');
    }
};
