
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
      <a href="" class="logo d-flex align-items-center">
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
              <h3 class="card-title">TEACHING EXPERIENCE</h3>
 
              <!-- Multi Columns Form -->
             

               
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form   class="row g-3" method="POST" action="{{route('post-stepthree')}}"  autocomplete="off" enctype="multipart/form-data" >
  @csrf
                

<div class="col-12">


<input type="hidden" value ="{{$last_id}}" name="faculty_id">
<input type="hidden" value ="{{$email}}" name="email">
  
  
<div class="table-responsive">
         
        
<table class="table table-striped" style="width:100%">
                <tr>
            <th></th>
            <th >Teaching Level</th>
            <th >Designation</th>
             <th >Subject</th>
             <th style="text-align:center;">Specialization</th>
             <th >Years of Experience</th>
             
        </tr>
          </table>
       

    <TABLE id="dataTable" class="table table-striped" style="width: 100%;">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><select class="form-control" name="enroll_deg[]" value="{{old('enroll_deg')}}">

                  
                      <option value="" hidden >--Select--</option>
                      <option value="Post Graduate">Post Graduate </option>
                      <option value="Under Graduate">Under Graduate</option>
                     
                     
                     
                           
                 </select>
        @error("enroll_deg")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_deg")}}</span>
                            @enderror
   </TD>

      <TD><input class="form-control" type="text" id="enroll_deg_desig" name="enroll_deg_desig[]" required >
        @error("enroll_deg_desig")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_deg_desig")}}</span>
                            @enderror
   </TD>

    <TD><input class="form-control" type="text" id="enroll_deg_sub"name="enroll_deg_sub[]" required >
        @error("enroll_deg_sub")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_deg_sub")}}</span>
                            @enderror
   </TD>

      <TD><input class="form-control" type="text" id="enroll_deg_intrest" name="enroll_deg_intrest[]" required >
        @error("enroll_deg_intrest")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_deg_intrest")}}</span>
                            @enderror
   </TD>
      <TD><input class="form-control"type="tel" onkeypress="return onlyNumberKey(event)" name="enroll_deg_years[]" required >
        @error("enroll_deg_years")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_deg_years")}}</span>
                            @enderror
   </TD>
     
          <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>
      

    </TR>
  </TABLE>
    </div>
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
      $(document).on('keypress', '#enroll_deg_desig', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

</script>
<script>
      $(document).on('keypress', '#enroll_deg_sub', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

</script>
<script>
      $(document).on('keypress', '#enroll_deg_intrest', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

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
      </section>

@endsection