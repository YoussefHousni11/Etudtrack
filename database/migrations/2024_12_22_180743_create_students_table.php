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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // L'id li ghadi ykoun l'key dyal tlib
            $table->string('first_name'); // Smiya dyal tlib
            $table->string('last_name'); // Smiya dyal a9ra
            $table->string('email')->unique(); // Email li khaso ykoun unique
            $table->string('phone_number'); // Raqm telefoni
            $table->date('dob'); // Taarikh lmilad
            $table->enum('gender', ['male', 'female', 'other']); // Ljanas
            $table->text('address'); // L3unwan
            $table->date('enrollment_date'); // Taarikh t9dima (inscription)
            $table->string('grade_level'); // L3am dyal darja (b7al 1ere année, 2eme, ...etc)
            $table->enum('status', ['active', 'graduated', 'suspended']); // L7ala dyal tlib
            $table->string('parent_name'); // Smiya dyal walid
            $table->string('parent_phone'); // Raqm telefon dyal walid
            $table->string('parent_email'); // Email dyal walid
            $table->timestamps(); // Atayb l7doud (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
