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
        Schema::create('faculty_enrollment_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faculty_id')->index();
            $table->foreign('faculty_id')->references('id')->on ('faculty_enrollment_perosnaldetails')->nullable();
            $table->text('enroll_deg');
            $table->text('enroll_deg_desig');
            $table->text('enroll_deg_sub');
            $table->text('enroll_deg_intrest');
            $table->text('enroll_deg_years');
            $table->text('enroll_expstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_enrollment_experiences');
    }
};
