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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->json('topics')->nullable(); // To store referenced topic IDs.
            $table->json('notes')->nullable(); // To store referenced note IDs.
            $table->dateTime('date')->nullable();
            $table->decimal('marks', 5, 2)->nullable()->comment('Marks in percentage, ranges from 0 to 100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
