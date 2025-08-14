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
        Schema::create('lmiaApprovals', function (Blueprint $table) {
            $table->id();
            $table->string('letter'); // Path to the letter file
            $table->string('email',50)->unique(); // Email address of the applicant (unique)
            $table->string('passport_number',20)->unique(); // Passport number of the applicant (unique)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmia_approval');
    }
};
