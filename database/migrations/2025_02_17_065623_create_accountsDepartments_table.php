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
        Schema::create('accountsdepartments', function (Blueprint $table) {
            $table->id();
            $table->string('name',50); // Full name of the applicant
            $table->string('passport_number',20)->unique(); // Passport number of the applicant (unique)
            $table->string('photo'); // Path to the applicant's photo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_department');
    }
};
