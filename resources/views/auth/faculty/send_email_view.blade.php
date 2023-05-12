@section("title","SGOU|USERS")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.dashboard')}}" style="color:white" ></i>DASHBOARD</a> 
</div>
</div>
    <section class="section">
      <div class="row">
        <div class="col-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
            <div class="card-title">SEND EMAIL </div>
   <form   class="row g-3" method="POST" action="{{ route('store.email') }}"  >
  @csrf
        <div class="col-md-6">
                        <label for="Greeting" class="form-label">Greeting</label>
                        
                        <input  type="text"  class="form-control" name="greeting">
        </div>
        <div class="col-md-6">
                        <label for="Body" class="form-label">Body</label>
                        
                        <input  type="text"  class="form-control" name="body">
        </div>
        <div class="col-md-6">
                        <label for="actiontext" class="form-label">Action Text</label>
                        
                        <input  type="text"  class="form-control" name="actiontext">
        </div>
        <div class="col-md-6">
                        <label for="actionurl" class="form-label">Action URL</label>
                        
                        <input  type="text"  class="form-control" name="actionurl">
        </div>
        <div class="col-md-6">
                        <label for="endtext" class="form-label">End Text</label>
                        
                        <input  type="text"  class="form-control" name="endtext">
        </div>
     
        <div class="text-center">
         <button type="submit" id="continue" class="btn btn-primary">Submit</button>
              
                </div>
          

</form>


      
             
     

             

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