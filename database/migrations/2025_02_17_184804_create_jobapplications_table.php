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
        Schema::create('jobapplications', function (Blueprint $table) {
            $table->id();
            $table->string('name',50); // Full name of the applicant
            $table->string('whatsapp_number',25); // WhatsApp number of the applicant
            $table->string('email',50)->unique(); // Email address of the applicant (unique)
            $table->string('passport_number',20)->unique(); // Passport number of the applicant (unique)
            $table->string('passport_image'); // Path to the passport image file
            $table->string('jobname',25); // Name of the job being applied for
            $table->string('livingcountry',25); // Country where the applicant currently lives
            $table->string('jobcountry',25); // Country where the job is located
            $table->string('cv'); // Path to the CV file
            $table->string('photo'); // Path to the applicant's photo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobapplications');
    }
};
