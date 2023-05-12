
@section("title","SGOU|USERS")
@extends("authlayouts.theme")
@section("maincontent")
<section class="section">

        
        <div class="row">
        
           
        <div class="col-12" style="margin-top:10px; ">
             
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

              <h5 class="card-title">FACULTY ENROLLMENT FORM</h5>
 
              <!-- Multi Columns Form -->
             

               
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form   class="row g-3" method="POST" action="{{route('post-stepone')}}"  autocomplete="off" enctype="multipart/form-data" >
  @csrf
  

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Name as in service records</label>
                  
                 <input id="enroll_name" type="text"  class="form-control" name="enroll_name" value="{{old('enroll_name')}}" required>
               

                                 @error("enroll_name")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_name")}}</span>
                            @enderror
                </div>
                   <div class="col-md-6">
                  <label for="inputName5" class="form-label">Email</label>
                  
                 <input id="enroll_email" type="email" class="form-control" name="enroll_email" value="{{old('enroll_email')}}"required>
               

                                 @error("enroll_email")
                          
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_email")}}</span>
                            @enderror
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Mobile Number</label>
                  
                 <input id="enroll_mobile" type="tel" maxlength="10"onkeypress="return onlyNumberKey(event)" minlength="10" class="form-control" name="enroll_mobile" value="{{old('enroll_mobile')}}" required>
               

                                 @error("enroll_mobile")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_mobile")}}</span>
                            @enderror
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label"> Alternate Mobile Number( If available)</label>
                  
                 <input id="enroll_mobile" type="tel" maxlength="10"onkeypress="return onlyNumberKey(event)" minlength="10"class="form-control" name="enroll_alt_mobile" value="{{old('enroll_alt_mobile')}}">
               

                                 @error("enroll_alt_mobile")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_alt_mobile")}}</span>
                            @enderror
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Prefered District for duty</label>
                  
                  <select class="form-control" name="enroll_district" value="{{old('enroll_district')}}"required>

                  
                      <option value="" hidden>--Select--</option>
                      <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                       <option value="Kollam">Kollam</option>
                        <option value="Pathanamthitta">Pathanamthitta</option>
                         <option value="Alappuzha">Alappuzha</option>
                         <option value="Kottayam">Kottayam</option>
                       <option value="Idukki">Idukki</option>
                        <option value="Ernakulam">Ernakulam</option>
                         <option value="Thrissur">Thrissur</option>
                            <option value="Palakkad">Palakkad</option>
                          <option value="Malappuram">Malappuram</option>
                          <option value="Kozhikode">Kozhikode</option>
                        <option value="Wayanad">Wayanad</option>
                       <option value="Kannur">Kannur</option>
                      <option value="Kasargod">Kasargod</option>
                      
                     
                    
                      
                 </select>
               

                                 @error("enroll_district")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_district")}}</span>
                            @enderror
                </div>
                  
 <div class="col-md-6">
   <label for="inputName5" class="form-label">Applying For</label>

                <TABLE id="dataTable"  style="width: 100%;">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD>
        <select class="form-control" name="enroll_post[]" required>

                  
                      <option value="">--Select--</option>
                    
                      <option value="1">category 1</option>
                      <option value="2">category 2</option>
                     
                     
                           
                 </select>
      
   </TD>
     
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

    </TR>
  </TABLE>
</div>

                <div class="col-md-6">
                <label for="inputName5" class="form-label"> Current Designation</label>
                  
                 <input id="enroll_designation" type="text" class="form-control" name="enroll_designation" value="{{old('enroll_designation')}}"required>
               

                                 @error("enroll_designation")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_designation")}}</span>
                            @enderror
                </div>

     

                 <div class="col-md-6">
                     <label for="inputName5" class="form-label">Institution Category</label>
             
                 <select class="form-control" name="enroll_instcategory" value="{{old('enroll_instcategory')}}"required >

                  
                      <option value="" hidden>--Select--</option>
                      <option value="Government College">Government College</option>
                      <option value="Aided College">Aided College</option>
                      <option value="Unaided College">Unaided College</option>
                      <option value="Self Financing Unaided College">Self Financing Unaided College</option>
                      <option value="Government Self Financing College">Government Self Financing College</option>
                      <option value="University Departments">University Departments</option>
                     
                     
                           
                 </select>

                                @error("enroll_instcategory")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_instcategory")}}</span>
                            @enderror
                </div>
                              
<div class="col-md-6">
                  <label for="inputName5" class="form-label">Type of Employment</label>
             
                 <select class="form-control" id="etype" name="etype" value="{{old('etype')}}" required onchange="checkDisability();">

                  
                      <option value="" hidden>--Select--</option>
                      <option value="Permanent">Permanent</option>
                      <option value="Guest">Guest</option>
                      <option value="Adhoc">Adhoc</option>
                      <option value="Contract">Contract</option>
                      <option value="Retired">Retired</option>
                      <option value="Other">Other</option>                 
                           
                 </select>

                                @error("etype")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("etype")}}</span>
                            @enderror
                </div>

           <div class="col-12" id="check" style="display: none;">
                    <div class="row">

                    <div class="col-md-6">
                 
                  
                 <input type="text" class="form-control" name="enroll_emptype"  id="enroll_emptype" placeholder="Enter you employment type "required>
               

                                 @error("enroll_emptype")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_emptype")}}</span>
                            @enderror
                </div>

                  
                 
</div>
</div>

                <div class="col-md-6">
                <label for="inputName5" class="form-label">Official Address</label>
                  
                 <input id="enroll_officeaddress" type="text" class="form-control" name="enroll_officeaddress" value="{{old('enroll_officeaddress')}}"required>
               

                                 @error("enroll_officeaddress")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_officeaddress")}}</span>
                            @enderror
                </div>
                <div class="col-md-6">
                <label for="inputName5" class="form-label">Communication Address</label>
                  
                 <input id="enroll_address" type="text" class="form-control" name="enroll_address" value="{{old('enroll_address')}}"required>
               

                                 @error("enroll_address")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_address")}}</span>
                            @enderror
                </div>

                            <h3 class="card-title">Date of Regular Appointment in Academic/Research Institute(Govt./Aided Colleges or Universities):</h3>
                
                <div class="col-md-6">
                            <label for="inputName5" class="form-label">Date:</label>
                 <input id="enroll_appointment" type="date" class="form-control" name="enroll_appointment" value="{{old('enroll_appointment')}}"required>
               

                                 @error("enroll_appointment")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_appointment")}}</span>
                            @enderror
                </div>
                
                <div class="col-md-6">
                <label for="inputName5" class="form-label">Completed years of service</label>
                  
                 <input id="enroll_experience" type="number"  class="form-control" name="enroll_experience" value="{{old('enroll_experience')}}"required>
               

                                 @error("enroll_experience")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_experience")}}</span>
                            @enderror
                        </div>

   

              

                     
                         <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-primary">Proceed</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
             
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>          


                    
            
                  
                  
                  

            
                 
               
                   
                 



      <script type="text/javascript">
          function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>

      <script type="text/javascript">
          function addRow1(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow1(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>
       <script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
     <script >
         $(document).on('keypress', '#enroll_name', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});
</script>
<script >
         $(document).on('keypress', '#enroll_designation', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});
</script>

      </section>

@endsection