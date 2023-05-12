<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;
    public function fetchPersonalDetails()
    {
        return $this->belongsTo('App\Models\FacultyEnrollmentPerosnaldetails','faculty_id','id');
    }
      public function fetchEducationalDetails()
    {
        return $this->hasMany('App\Models\FacultyEnrollmentQualification','faculty_id','id');
    }
    public function fetchExperienceDetails()
    {
        return $this->hasMany('App\Models\FacultyEnrollmentExperience','faculty_id','id');
    }

    public function fetchPostDetails()
    {
        return $this->hasMany('App\Models\EnrollPost','faculty_id','faculty_id');
    }
}
