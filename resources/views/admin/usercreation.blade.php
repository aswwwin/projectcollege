@section("title","DASHBOARD")
@extends("adminlayouts.theme")
@section("maincontent")
<div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('userlist')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> Users List</a> 
       </div>
    </div><!-- End Page Title -->
<section class="section">

        
        
 

  <div class="card">
<div class="card-body">
<div class="card-title">USER CREATION</div>

              
 
              <!-- Multi Columns Form -->
             

               
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form   class="row g-3" method="POST" action="{{route('post-usercreation')}}"  autocomplete="off" enctype="multipart/form-data" >
  @csrf
<div class="col-md-6">
                  <label for="inputName5" class="form-label">Name</label>
                  
                 <input id="user_name" type="text"  class="form-control" name="user_name" value="{{old('user_name')}}" required>
               

                                 @error("user_name")
                       
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("user_name")}}</span>
                            @enderror
                </div>
                   <div class="col-md-6">
                  <label for="inputName5" class="form-label">Email</label>
                  
                 <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}"required>
               

                                 @error("email")
                          
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("email")}}</span>
                            @enderror
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Mobile Number</label>
                  
                 <input id="user_mobile" type="tel" maxlength="10"onkeypress="return onlyNumberKey(event)" minlength="10" class="form-control" name="user_mobile" value="{{old('user_mobile')}}" required>
               

                                 @error("user_mobile")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("user_mobile")}}</span>
                            @enderror
                </div>
                <div class="col-4">
            
            
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="admpassword" name="password">
               

            </div>
            <div class="col-4">
                <label for="confirmpassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="admconfirmpassword" name="password">
                <div class="form-text confirm-message"></div>
                </div>  

                <!-- Drop dwon list  -->
                <div class="col-md-4">
                <label for="inputName5" class="form-label">USER TYPE</label>
                  
                  <select class="form-control" name="enroll_user-type" value="{{old('enroll_user-type')}}"required>

                  
                      <option value="" hidden>--Select--</option>
                      <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                      <option value="FINANCIER">FINANCIER</option>
                      <option value="2">REGISTRAR</option>
                      <option value="IT">IT</option>
                      <option value="ACADEMICS">ACADEMICS</option>
                      <option value="EXAMINATION">EXAMINATION</option>
                      <option value="STUDENT">STUDENT</option>

                 </select>
               

                                 @error("enroll_user-type")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("enroll_user-type")}}</span>
                            @enderror
                </div>
                <div class="col-12">
                      
                <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-primary">Submit</button>
                  
                </div>
         
    <!-- </div> -->

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
         $(document).on('keypress', '#admin_enroll_name', function (event) {
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