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
        Schema::create('enroll_posts', function (Blueprint $table) {
          $table->id();
            $table->unsignedBigInteger('faculty_id')->index();
            $table->foreign('faculty_id')->references('id')->on ('faculty_enrollment_perosnaldetails')->nullable();
            $table->text('enroll_post');
            $table->text('enroll_post_id_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enroll_posts');
    }
};
