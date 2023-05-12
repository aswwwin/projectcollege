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
        Schema::create('faculty_enrollment_perosnaldetails', function (Blueprint $table) {
             $table->id();
            $table->text('enroll_name');
            $table->text('enroll_email');
            $table->bigInteger('enroll_mobile');
            $table->bigInteger('enroll_alt_mobile')->nullable();
            $table->text('enroll_district');
            $table->text('enroll_designation');
            $table->text('enroll_emptype');
            $table->text('enroll_instcategory');
            $table->text('enroll_officeaddress');
            $table->text('enroll_address');
            $table->text('enroll_appointment');
            $table->Integer('enroll_experience');
            $table->tinyInteger('enroll_pstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_enrollment_perosnaldetails');
    }
};
