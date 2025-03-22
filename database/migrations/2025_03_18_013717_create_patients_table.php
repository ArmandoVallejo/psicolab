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
        Schema::create('patients', function (Blueprint $table){
            $table->id();
            $table->string('name', 70);
            $table->string('phone', 12)->unique();
            $table->date('birth_date');
            $table->enum('sex', ['Male', 'Female'])->default('Male');
            $table->string('genre', 30);
            $table->string('reason_for_visit', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
