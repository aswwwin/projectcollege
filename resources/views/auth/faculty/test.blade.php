
@section("title","SGOU|CIEP")
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
<form   class="row g-3" method="POST" action="{{route('post-test')}}"  autocomplete="off" enctype="multipart/form-data" >
  @csrf
  

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Name as in service records</label>
                  
                 <input id="enroll_name" type="text" class="form-control" name="enroll_name" value="{{old('enroll_name')}}" >
               

                                 @error("enroll_name")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_name")}}</span>
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
      </section>

@endsection