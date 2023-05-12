@section("title","SGOU|USERS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        Faculty Enrolled
       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
          
        <div class="card-title">DEPARTMENT LIST <input type="button" class="btn btn-outline-success" onclick='selects()' value="Select All"/>  
        <input type="button" onclick='deSelect()'  class="btn btn-outline-warning" value="Deselect All"/>&nbsp;
        <a href="{{ route('send.email.view')  }}" class="btn btn-success">Send Email</a></div>
        
        <form action="{{ route('approve')  }}" method="POST">
     <div class="table-responsive">
     

       <div class="table-responsive">
        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>

                          <th>Checkbox</th>
                          <th>Sl No.</th>
                          <th>Email</th>
                          <th>Username </th>
                          <th>User Mobile </th>
                          <th>Action</th>
                          
                        
                        </tr>
                </thead>
                <tbody>
                 @foreach($faculty as $faculty)
                           <tr>
                              <td><input type="checkbox"name="check[]" value="{{$faculty->id}}"></td> 
                              <td>{{$loop->iteration}}</td>  
                             
                              <td>{{$faculty->enroll_email}}</td>
                              <td>{{$faculty->enroll_name}}</td>
                              <td>{{$faculty->enroll_mobile}}</td>
                              <td>
                       
                          </tr>
                          @endforeach
                            </tbody>
                 
              </table>
              </div>
              <!-- End Table with stripped rows -->
     

              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
     

<!-- Modal -->
<div class="modal fade" id="userShowModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
        
      </div>
      <div class="modal-body">
        <p><Strong>ID:</strong><span id="faculty-id"></span></p>
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
      </div>
      <script type="text/javascript">
        
        $(document).ready(function(){
          $('body').on('click','.show-user',function(){
            alert("hello");
         });
      </script>

      <script type="text/javascript">
        function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('accordion-item');

  for (i = 0; i < nodes.length; i++) 
  {
    if (nodes[i].innerText.toLowerCase().includes(filter))
     {
      nodes[i].style.display = "block";
       

    }
     else 
     {
      nodes[i].style.display = "none";

    }
  }
}
      </script>

       <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>
    <script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName('check[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('check[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
        </script> 
    </section>
    @endsection