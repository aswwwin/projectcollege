<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Source:SGOU Recruitment Portal.</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  height: 30px;
  text-align: left;
}
</style>
</head>
<body onload="window.print()">


<div style="margin:10px">
<table style="width:100%">
    <tr>
        <td colspan="7">
            <center><img src="{{asset('backend/assets/img/logo-pdf-detail.png')}}" width="1000px" height="200px"></center>
            

        </td>
    </tr>
  <tr>
        <td colspan="7">
            <center><h2>Expression of Interest for Empanelment for Examination Duties</h2></center>
            

        </td>
    </tr>
     <tr>
  <th colspan="7"> <h4>Post Applied</h4></th>
</tr>

               
             
               
                             @foreach($applicants->fetchPostDetails as $acdetails)
                            
                           <tr>
                              <td colspan="10">{{$acdetails->enroll_post}}</td>
                             
                            
                          
                                
                          </tr>
                            @endforeach
  <tr>
    <td colspan="7">
      <h4>PERSONAL DETAILS</h4>
      

    </td>
  </tr>
    
  <tr>
    <th>Full Name / ID</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_name}}</td>
    <th>Application ID</th>
    <td colspan="3">{{$applicants->application_id}}</td>
  </tr>
    <tr>
    <th>Email</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_email}}</td>
                  <td rowspan="3" colspan="4">
        <div class="barcode" style="width: 200px;border: none;margin: 0 auto;">
            
        
            
  @php
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
  @endphp 
        <img src="data:image/jpg;base64,{{ base64_encode($generator->getBarcode($applicants->application_id, $generator::TYPE_CODE_128)) }}" >
    <center>{{$applicants->application_id}}</center>
   
</div>
</td> 
    
  </tr>

    <tr>
    <th>Mobile</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_mobile}}</td>
   </tr>
   <tr>
    <th>Alternate Mobile</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_alt_mobile}}</td>
   </tr>
   <tr>
    <th>Preferred District for Duty</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_district}}</td>
   </tr>
    <tr>
    <th>Current Designation</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_designation}}</td>
    <th>Employment Type</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_emptype}}</td>
  </tr>
  <tr>
    <th>Institution Category</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_instcategory}}</td>
    <th>Date of Regular Appointment in Academic/Research Institute</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_appointment}}</td>
    
  </tr>
  <tr>
    <th>Completed years of service</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_experience}}</td>
  </tr>
   
 <tr>

       
    <td colspan="7">
      <h4>COMMUNICATION DETAILS</h4>
       <tr>
    <th>Official Address</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_officeaddress}}</td>
    <th>Communication Address</th>
    <td colspan="3">{{$applicants->fetchPersonalDetails->enroll_address}}</td>
  </tr>

  

    </td>
  </tr>

  <tr>
  <th colspan="7"> <h4>EDUCATIONAL & PROFESSIONAL QUALIFICATIONS</h4></th>
</tr>

                    <tr>
                              
                          <th colspan="2">Degree</th>
                          <th>Year of Passing</th>
                          <th colspan="2">Subject/Discipline/Specialization</th>
                          <th colspan="3">University</th>
                         
                        
                        
                        </tr>
             
               
                             @foreach($applicants->fetchEducationalDetails as $acdetails)
                            
                           <tr>
                              <td colspan="2">{{$acdetails->enroll_degree}}</td>
                              <td>{{$acdetails->enroll_year}}</td>
                              <td colspan="2">{{$acdetails->enroll_specialisation}}</td>
                              <td colspan="3">{{$acdetails->enroll_university}}</td>
                             
                            
                          
                                
                          </tr>
                            @endforeach
                            <tr>
<th colspan="7"> <h4>TEACHING EXPERIENCE</h4></th>
</tr>

                    <tr>
                        
                          <th colspan="2">Teaching Level</th>
                          <th >Designation</th>
                          <th colspan="2">Subject</th>
                          <th >Area of Interest/Specialization</th>
                           <th colspan="2">Years of Experience</th>
                        
                        </tr>
               
                             @foreach($applicants->fetchExperienceDetails as $expdetails)
                            <tr>
                              
                              <td colspan="2">{{$expdetails->enroll_deg}}</td>
                              <td >{{$expdetails->enroll_deg_desig}}</td>
                               <td colspan="2">{{$expdetails->enroll_deg_sub}}</td>
                               <td >{{$expdetails->enroll_deg_intrest}}</td>
                               <td colspan="2">{{$expdetails->enroll_deg_years}}</td>
                            </tr>
                        
                           
                            
                               @endforeach
                               

</table>
<br>
<br>









<div class="col-lg-12">
 I am willing to work  for Sreenarayanaguru Open University according to the terms and conditions of the University.I hereby declare that the details furnished above are true and correct to the best of my knowledge. In case any of the above information is found to be false or misleading or misrepresenting, I am aware that I may be held liable for it and my empanelment  may be immediately cancelled and necessary action, as deemed fit, may be taken against me.
  <br>
<br>
  <h3 style="text-align:right">{{$applicants->fetchPersonalDetails->enroll_name}}</h3>
</div>
</div>


</body>
</html>
