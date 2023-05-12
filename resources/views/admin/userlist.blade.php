@section("title","SGOU|USERS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('usercreation')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> Create User</a> 

       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   <div class="card-title">USERS LIST <input type="button" class="btn btn-outline-success" onclick='selects()' value="Select All"/>  
        <input type="button" onclick='deSelect()'  class="btn btn-outline-warning" value="Deselect All"/>&nbsp;
        <a href="{{ route('send.email.view')  }}" class="btn btn-success">Send Email</a></div>
        
        <form action="{{ route('deleteuser')  }}" method="POST">
          @csrf
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
                          <th>Role</th>
                          <th>Action</th>
                          
                        
                        </tr>
                </thead>
                 <tbody>
                 @foreach($user as $user)
                           <tr>
                              <td><input type="checkbox"name="ids[]" value="{{$user->id}}"></td> 
                              <td>{{$loop->iteration}}</td>  
                             
                              <td>{{$user->email}}</td>
                              <td>{{$user->user_name}}</td>
                              <td>{{$user->user_mobile}}</td>
                              
                              <td>

                                @if($user->role == 2)
                                
                                 <span class="badge bg-success">CE</span>


                                 @elseif($user->role == 3)
                                 <span class="badge bg-warning">CEO</span>

                                 @elseif($user->role == 4)
                                 <span class="badge bg-secondary">LSC Co-ordinator</span>
                                  @elseif($user->role == 5)
                                 <span class="badge bg-secondary">Academic Counsellor</span>
                                  @else
                                 <span class="badge bg-secondary">RCD</span>
                                @endif
                              </td>
                              <td><input type="submit" class = "btn btn-danger" value="Delete"></td>
                           
                            
                           
                          
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
      </div>
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
                var ele=document.getElementsByName('ids[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('ids[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
        </script> 
    </section>
    @endsection