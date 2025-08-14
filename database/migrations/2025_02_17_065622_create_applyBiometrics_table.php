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
        Schema::create('applyBiometrics', function (Blueprint $table) {
            $table->id();
            $table->string('name',50); // Full name of the applicant
            $table->string('passport_number',20)->unique(); // Passport number of the applicant (unique)
            $table->string('whatsapp_number',25); // WhatsApp number of the applicant
            $table->string('livingcountry',25); // Country where the applicant currently lives
            $table->string('date',25); // date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_biometric');
    }
};
