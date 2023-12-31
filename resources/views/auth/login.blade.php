<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    --}}


    <title>Login</title>
</head>
<body>

   
<div class="container">

    <div class="container-img">

        <form action="{{route('login-user')}}" method="post" >

            @if(Session::has('success'))
           <div class="div alert alert-success">{{Session::get('success')}}</div>
           @endif
   
           @if(Session::has('failed'))
           <div class="div alert alert-danger">{{Session::get('failed')}}</div>
           @endif
   
           @csrf
   
            
            <h3 style=" text-align: center;"><strong>Login</strong></h3>
            <br>
            
               <div class="form-outline mb-4">
                   <input type="email" id="email" name="email" class="form-control" value="{{old('name')}}" />
                   <label class="form-label" for="email">Email address</label>
                   <span class="text-danger">@error('email'){{$message}} @enderror</span>
               </div>
   
               
               <div class="form-outline mb-4">
                   <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}"/>
                   <label class="form-label" for="form2Example2">Password</label>
                   <span class="text-danger">@error('password'){{$message}} @enderror</span>
               </div>
   
             
               <div class="row mb-4">
                   <div class="col d-flex justify-content-center">
                  
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                       <label class="form-check-label" for="form2Example31"> Remember me </label>
                   </div>
                   </div>
   
                   <div class="col">
                 
                   <a href="#!">Forgot password?</a>
                   </div>
               </div>
   
              
               <button type="submit" class="primary-button"> <span>SIGN IN</span></button>
   
      
       
    </div>

    <div class="container-buttons">
        <div class="secondary-button" onclick="window.location.href='register'">
         <span>SIGNUP</span>
        </div>
 </div>
    

    
{{-- <br><br>
        <div class="button-container">

            <a href="/auth/google/redirect" class="btn btn-info">Google</a>
            <a href="/auth/github/redirect" class="btn btn-info">Github</a>
            <a href="/auth/facebook/redirect" class="btn btn-info">Facebook</a>

        </div> --}}

   

    </div>


      
        
      


        
</body>
</html>