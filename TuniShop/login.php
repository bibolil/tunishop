



<?php
    require('functions.php');
	   if($_SERVER['REQUEST_METHOD']=="POST")
	   {
	   $login->verification($_POST['username'],$_POST['password']);
       if($login)
       {
       session_start();
                            
                            // Store data in session variables
                            $_SESSION["user_id"] = $id;
                            $_SESSION["username"] = $username;   
       }
       
    }
	   
?>

<<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Custom CSS file -->
  <link rel="stylesheet" href="style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>



<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Login to our TuniShop</h2>
    </div>
    <div class="">
      <div class="">
        <form id="login-form" class="form" action="" method="post">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="username" id="username" placeholder="Username" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" id="password" placeholder="Password" required />
          </div>
          
      
         
          <div class="input_field checkbox_option">
            <input type="checkbox" id="cb1">
            <label for="cb1"><span>Remember me</span> <span></label>
          </div>
         
                               
                           
          <input class="button" type="submit" value="Login" />
           <div id="register-link" class="text-right">
             <center>
            <a class="button" href="register.php"> Register here </a>
             </center>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
<!-- partial -->
  
</body>
</html>