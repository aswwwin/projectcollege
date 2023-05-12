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
        Schema::create('faculty_enrollment_qualifications', function (Blueprint $table) {
  $table->id();
            $table->unsignedBigInteger('faculty_id')->index();
            $table->foreign('faculty_id')->references('id')->on ('faculty_enrollment_perosnaldetails')->nullable();
            $table->text('enroll_degree');
            $table->text('enroll_year');
            $table->text('enroll_specialisation');
            $table->text('enroll_university');
            $table->text('enroll_estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_enrollment_qualifications');
    }
};
