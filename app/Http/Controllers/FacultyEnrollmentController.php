<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyEnrollmentPerosnaldetails;
use App\Models\FacultyEnrollmentQualification;
use App\Models\FacultyEnrollmentExperience;
use App\Models\EnrollCategory;
use App\Models\EnrollPost;
use App\Models\Applicants;
class FacultyEnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('auth.faculty.facultyenrole');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
    }
  public function facultyEnrollStep1(Request $request)
    {
        request()->validate([
        "enroll_name"=>'required',
        "enroll_email"=>'required',
        "enroll_mobile"=>'required|digits:10',
       
        "enroll_district"=>'required',
        "enroll_designation"=>'required',
        "enroll_emptype"=>'required',
        "enroll_instcategory"=>'required',
        "enroll_officeaddress"=>'required',
        "enroll_address"=>'required',
        "enroll_appointment"=>'required',
         "enroll_experience"=>'required',
        
      

        ],
        [
        'enroll_name.required' => 'Field is mandatory.',
        'enroll_email.required' => 'Field is mandatory.',
        'enroll_mobile.required' => 'Field is mandatory.',
        'enroll_mobile.digits' => 'Mobile Number should be 10 digits.',
        
        'enroll_district.required' => 'Field is mandatory.',
        'enroll_designation.required' => 'Field is mandatory.',
        'enroll_emptype.required' => 'Field is mandatory.',
        'enroll_instcategory.required' => 'Field is mandatory.',
        'enroll_officeaddress.required' => 'Field is mandatory.',
        'enroll_address.required' => 'Field is mandatory.',
        'enroll_appointment.required' => 'Field is mandatory.',
        'enroll_experience.required' => 'Field is mandatory.',
       
       ]);


        $fepdetails= new FacultyEnrollmentPerosnaldetails;
        $fepdetails->enroll_name=request("enroll_name");
        $fepdetails->enroll_email=request("enroll_email");
        $fepdetails->enroll_mobile=request("enroll_mobile");
        $fepdetails->enroll_alt_mobile=request("enroll_alt_mobile");
        $fepdetails->enroll_district=request("enroll_district");
        $fepdetails->enroll_designation=request("enroll_designation");
        $fepdetails->enroll_emptype=request("enroll_emptype");
        $fepdetails->enroll_instcategory=request("enroll_instcategory");
        $fepdetails->enroll_officeaddress=request("enroll_officeaddress");
        $fepdetails->enroll_address=request("enroll_address");
        $fepdetails->enroll_appointment=request("enroll_appointment");
        $fepdetails->enroll_experience=request("enroll_experience");
        $fepdetails->enroll_pstatus=1;
        $fepdetails->save();
        $last_id=$fepdetails->id;
        $enpost=request("enroll_post");
        foreach($enpost as $enpost1)
        {

             
               $epost= new EnrollPost; 
               $epost->faculty_id=$last_id;
               $epost->enroll_post=$enpost1;
               $epost->enroll_post_id_status=1;
               $epost->save();
             
        }

        return redirect()->route('step-two',["last_id"=>$last_id]);
    
         
    }
    public function facultyEnrollStep2($last_id)
    {
        return view('auth.faculty.facultyenrolesteptwo',["last_id"=>$last_id]);
    }

    public function postfacultyEnrollStep2(Request $request)
    {
        $end=request('enroll_degree');
        $eny=request('enroll_year'); 
        $ens=request('enroll_specialisation');
        $enu=request('enroll_university');
        $faculty_id=request('faculty_id');


         for($a=0;$a<sizeof($end);$a++)
        {

               $ed=$end[$a];
               $ey=$eny[$a];
               $es=$ens[$a];
               $eu=$enu[$a];

               $qdetails= new FacultyEnrollmentQualification; 
               $qdetails->faculty_id=$faculty_id;
               $qdetails->enroll_degree=$ed;
               $qdetails->enroll_year=$ey;
               $qdetails->enroll_specialisation=$es;
               $qdetails->enroll_university=$eu;
               $qdetails->enroll_estatus=1;
               $qdetails->save();
             
        }
       

        return redirect()->route('step-three',["last_id"=>$qdetails->faculty_id]);
    }
    public function facultyEnrollStep3($last_id)
    {
        return view('auth.faculty.facultyenrolestepthree',["last_id"=>$last_id]);
    }
    
    public function postfacultyEnrollStep3(Request $request)
    {
 
      

        $exd=request('enroll_deg');
        $exdesig=request('enroll_deg_desig'); 
        $exsub=request('enroll_deg_sub');
        $exintrst=request('enroll_deg_intrest');
        $exyear=request('enroll_deg_years');

        $faculty_id=request('faculty_id');


         for($a=0;$a<sizeof($exd);$a++)
        {

               $deg=$exd[$a];
               $desig=$exdesig[$a];
               $sub=$exsub[$a];
               $intrst=$exintrst[$a];
               $year=$exyear[$a];

               $qdetails= new FacultyEnrollmentExperience; 
               $qdetails->faculty_id=$faculty_id;
               $qdetails->enroll_deg=$deg;
               $qdetails->enroll_deg_desig=$desig;
               $qdetails->enroll_deg_sub=$sub;
               $qdetails->enroll_deg_intrest=$intrst;
                $qdetails->enroll_deg_years=$year;
               $qdetails->enroll_expstatus=1;
               $qdetails->save();


    
             
        }
       

             $applicants= new Applicants;
               $applicants->faculty_id=request('faculty_id');
               $applicants->application_id =date('ymd').random_int(1000, 2500);
               $applicants->application_status=1;
               $applicants->save();
               $last_id=$applicants->id;

               return redirect()->route('step-four',["last_id"=>$last_id]);


}
    public function facultyEnrollStepfour($id)
    {
        
        $applicants=Applicants::find($id);
        return view('auth.faculty.sucess',["applicants"=>$applicants]);
    }

  public function facultyEnrollStepfive($id)
    {
        
        $applicants=Applicants::find($id);
        return view('auth.faculty.download',["applicants"=>$applicants]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
