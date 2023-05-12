
@section("title","SGOU|HOME")
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
                
               <div class="col-md-12" id="bannerhome2">
              <div class="row">
                 <div class="col-6">
                       <img src="{{asset('backend/assets//img/indexgif.gif')}}" height="400">
                
                
              </div>
                 
                <div class="col-6" >
                  <div class="animated animatedFadeInUp fadeInUp">
                        <img src="{{asset('backend/assets//img/sgouu.png')}}" align="right" >
                  </div>
             
              </div>
             
              </div>
            </div>
           
    
        
             </div>

                <div class="col-12" id="grid1">
          <div class="row">
        
             <div class="col-12">
                 <div class="animated animatedFadeInUp fadeInUp">
                <center> <h4 style="color:blue; margin-top: 10px;">WELCOME TO  FACULTY ENROLLMENT PORTAL</h4></center>
                 </div>
                </div>
           
                <!-- <div class="col-md-4" style="margin-top: 30px;">
          <a href="{{route('register')}}" class="btn btn-secondary" style="width: 300px;"><i class="ri-account-circle-fill" id="iconlogin"></i>
            <br>
          NEW REGISTRATION</a>
          

              </div> -->

           <div class="col-md-4" style="margin-top: 30px;">
          <a href="{{route('login')}}" class="btn btn-success" style="width: 300px; background-color:ffa900;"><i class="bi-person-check-fill" id="iconlogin"></i>
            <br>
          USER LOGIN    </a>

              </div>

              <div class="col-md-4" style="margin-top: 30px;">
          <a href="{{route('step-one')}}" class="btn btn-success" style="width: 300px; background-color:ffa900;"><i class="bi-person-fill" id="iconlogin"></i>
            <br>
         FACULTY ENROLLMENT    </a>

              </div>

              <div class="col-md-4" style="margin-top: 30px;">
          <a href="{{route('alert')}}" class="btn btn-success" style="width: 300px; background-color:ffa900;"><i class="bi-bell-fill" id="iconlogin"></i>
            <br>
         NOTIFICATION   </a>

              </div>
            
            
             
            

          
        <script>
function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") 
  {
    x.type = "text";
  } 
  else
   {
    x.type = "password";
  }
}
</script>

    </section>
@endsection