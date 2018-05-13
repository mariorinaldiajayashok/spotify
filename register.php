
<?php

include('includes/handlers/login-handler.php');

include('includes/handlers/register-handler.php');

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">

 <div class="row">

  <div class="col-md-8">

  <h1>About Spotify</h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, assumenda beatae, consequuntur dolorum et facere inventore ipsum iste laudantium magnam minima nesciunt nisi nostrum possimus quos sapiente soluta voluptatibus! At culpa cumque ducimus, eligendi facere illum magni minus natus porro quidem quisquam sed, tempora voluptatem! Nesciunt ratione repudiandae sapiente voluptatibus?</p>


  </div>   <!--col-md-8-->



 <div class="col-md-4">

     <br>

 <div class="card">

  <div class="card-header">

      <h4>LOGIN</h4>
      <p>Login to continue where you left off</p>


  </div><!--card-header-->

 <div class="login-cover">

<div class="card-body">

    <form action="register.php" method="post">

     <div class="form-group">

         <input type="text" name="login-username" class="form-control" placeholder="Username">





     </div> <!--form-group-->

        <div class="form-group">

            <input type="password" name="login-password" class="form-control" placeholder="Password">





        </div> <!--form-group-->


        <button class="btn btn-primary btn-block" name="login">LOGIN</button>

         <br>
        <div class="jquery-handler">

            <a href="#" style="margin-left: 20px; color: red; font-family: Menlo;">New User?Register Here</a>
        </div>


    </form>






</div> <!--card-body-->

 </div> <!--login-cover-->


 </div> <!--card-->


  <br>


  <div class="card">

   <div class="card-header">

    <h4>Registration</h4>

    <p>Register to access all the content for free</p>




   </div> <!---card-header-->


    <div class="signup-form">
   <div class="card-body">

       <form action="register.php" method="post">

       <div class="form-group">

           <input type="text" name="register-username" placeholder="Username" class="form-control">

       </div>


           <div class="form-group">

               <input type="text" name="register-firstname" placeholder="Firstname" class="form-control">

           </div>


           <div class="form-group">

               <input type="text" name="register-lastname" placeholder="Lastname" class="form-control">

           </div>

           <div class="form-group">

               <input type="email" name="register-email" placeholder="Email" class="form-control">

           </div>

           <div class="form-group">

               <input type="email" name="register-confirmEmail" placeholder="Confirm Email" class="form-control">

           </div>

           <div class="form-group">

               <input type="password" name="register-password" placeholder="Password" class="form-control">

           </div>

           <div class="form-group">

               <input type="password" name="register-confirmPassword" placeholder="Confirm Password" class="form-control">

           </div>


          <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>

           <br>

           <a href="#" style="color: red;font-family: Menlo;margin-left: 20px;">Already a user?Login here</a>


       </form>





   </div>   <!---card-body--->

    </div> <!---signup-form-->







  </div><!---card--->












 </div>    <!--col-md-4-->





 </div>   <!--container-->






</div> <!--container-->












<script src="assets/js/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>