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
        Schema::create('biological_functions', function (Blueprint $table) {
            $table->id();
            $table->string('apetite', 50);
            $table->enum('apetite_quality', ['Good', 'Regular', 'Bad'])->default('Regular');
            $table->string('thirst', 50);
            $table->enum('thirst_quality', ['Good', 'Regular', 'Bad'])->default('Regular');
            $table->string('sleep', 50);
            $table->enum('sleep_quality', ['Good', 'Regular', 'Bad'])->default('Regular');
            $table->string('weight_change', 50);
            $table->string('gastric_problems', 50);
            $table->foreignId('clinical_history_id')->constrained('clinical_histories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biological_functions');
    }
};
