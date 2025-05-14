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
        Schema::create('familiar_relations', function (Blueprint $table) {
            $table->id();
            $table->string('mother', 180); 
            $table->string('father', 180); 
            $table->string('brothers', 180); 
            $table->string('couple', 180); 
            $table->string('children', 180); 
            $table->foreignId('clinical_history_id')->constrained('clinical_histories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiar_relations');
    }
};
