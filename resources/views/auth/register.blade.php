
@section("title","SGOU|LOGIN")
@extends("authlayouts.theme")
@section("maincontent")
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Jquery Password and confirm password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
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
                <div class="col-12" id="banneraction">
                    <!-- <a href="/" style="color:white;font-size: 20px;"><i class="bi bi-house"></i>Home</a> -->
                   
                </div>

         
            <div class="col-md-6" style="padding-top: 30px;background: #fcfcff;" id="loginleft">
               <img src="{{asset('backend/assets//img/log.png')}}" width="500" height="380">
            </div>
            <div class="col-md-5" style="border: 1px solid #ced4da; margin-top: 5px;padding-bottom: 10px;background: #fcfcff;">
                    <div class="d-flex justify-content-center py-4">
                         <div class="pagetitle"><h4 style="color:navy;"><strong>REGISTRATION</strong></h4></div> 
              
              </div><!-- End Logo -->

                <form method="POST" action="{{ route('login') }}" autocomplete="off" class="row g-3 needs-validation">

                        @csrf
                  
                 <div class="col-12">
                             @if( Session::get('error'))
                                     <div class="alert alert-danger">
                                         {{ Session::get('error') }}
                                     </div>
                                @endif
                               @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

      @if(session()->has('failmessage'))
    <div class="alert alert-danger">
        {{ session()->get('failmessage') }}
    </div>
    @endif
                 </div>

                 <div class="col-12">
                      <label for="Username" class="form-label">Name</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi-person"></i></span>
                         <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  >

                              
                      </div>
                        @error('name')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('name') }}</span>
                                         @enderror
                    </div>

           



                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  >

                              
                      </div>
                        @error('email')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('email') }}</span>
                                         @enderror
                    </div>

                    <!-- <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"  onclick="showPassword()"><i class="bi bi-eye-fill"></i></span>
                           
                       <input id="password" type="password" class="form-control" name="password"    value="{{old('password')}}">

                              
                    </div>
                     @error('password')
                                             <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('password') }}</span>
                                         @enderror
                      </div>


                    
    
      <div class="col-12">
        <label for="yourPassword" class="confirmPassword">Confirm Password</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"  onclick="showPassword()"><i class="bi bi-eye-fill"></i></span>

          <input name="confirmPassword" type="password" autocomplete="off" class="form-control" id="confirmPassword" >
          <div class="invalid-feedback">
            Password not a match.
          </div>
        </div>
      </div> -->
      <!-- <div class="container"> -->
    <!-- <div class="row justify-content-center mt-5"> -->
        <div class="col-12">
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">

            </div>
            <div class="col-12">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword">
                <div class="form-text confirm-message"></div>
         
    <!-- </div> -->
</div>   
                  
                    <div class="col-4">
                      
                        <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Register') }}
                                </button>
                    </div>
                    
    

  
                   
                  </form>
             
            </div>
</div>
            </div>
          </div>

          

          

        </div>
      </div>
      
<script type="text/javascript">
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
    var string_length = 6;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
   document.getElementById("captcha1").value=randomstring;

</script>
<script type="text/javascript">
    function captchaRefresh()
    {

    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
    var string_length = 6;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
   document.getElementById("captcha1").value=randomstring;

    }
</script>
        <script>
function showPassword() {

  var y = document.getElementById("password").value;
  
  if(y=="")
  {
    alert('Please enter a password to show')
  }
  else
  {
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
}
</script>
<script>
    $('#password, #confirmpassword').on('keyup', function(){

        $('.confirm-message').removeClass('success-message').removeClass('error-message');

        let password=$('#password').val();
        let confirm_password=$('#confirmpassword').val();

        if(password===""){
            $('.confirm-message').text("Password Field cannot be empty").addClass('error-message');
        }
        else if(confirm_password===""){
            $('.confirm-message').text("Confirm Password Field cannot be empty").addClass('error-message');
        }
        else if(confirm_password===password)
        {
            $('.confirm-message').text('Password Match!').addClass('success-message');
        }
        else{
            $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
        }

    });
</script>
<style>
        .success-message{
            color:green
        }
        .error-message{
            color:red;
        }
    </style>

    </section>
@endsection
