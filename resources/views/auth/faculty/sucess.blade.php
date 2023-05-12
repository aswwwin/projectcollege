
@section("title","SGOU|CIEP")
@extends("authlayouts.theme")
@section("maincontent")
<section class="section">

        
        <div class="row">
        
           
        <div class="col-12" style="margin-top:10px;">
             
<div class="card">
<div class="card-body">
     <div class="row">
        
       <div class="col-12" id="bannerhome">
                   <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('backend/assets/img/headerlogo.png')}}" alt="" id="responsive">
        
      </a>
     
    </div><!-- End Logo -->`
                </div>
       <div class="col-12" id="banneraction" >
                  <nav class="header-nav ms-auto" style="float:right;">
      <ul class="d-flex align-items-center">
 
    


        <li class="nav-item dropdown pe-3">
@if (Auth::check())
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
         <span class="d-none d-md-block dropdown-toggle ps-2"><i class="bi bi-person-circle"></i>

 {{ Auth::user()->email ?? ""}}

@endif</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>@if (Auth::check())

 {{ Auth::user()->user_name ?? ""}}

@endif</h6>
             
           
            </li>

           
            

       

           


          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->
    </div>
  <hr>
<div class="card">
<div class="card-body">
            
               
      
        
              
  
   
<div class="col-12">
     
    <div class="alert alert-success">
       You have successfully submit your intrest for Empanelment as <strong>{{$applicants->fetchPersonalDetails->enroll_post}}</strong>  with application id <strong>{{$applicants->application_id}}</strong>
    </div>
       <div style="margin-top:10px;"> <a href="{{route('step-five',$applicants->id)}}" class="btn btn-outline-primary" target="_blank">Download Application</a>
                      

</div>
              

                 


    </div>
    </div>
    </div>
    </div>
    </div>
    </div>            
http://127.0.0.1:8000/step-four/1/succes.form
      </section>

@endsection