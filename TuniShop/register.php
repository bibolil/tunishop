
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="style4.css">

</head>

<?php
    require('functions.php');
	   if($_SERVER['REQUEST_METHOD']=="POST")
	   {
      date_default_timezone_set('Europe/Paris');
      $date = date('d-m-y h:i:s');
	    $register->registernewuser($_POST['userid'],$_POST['first_name'],$_POST['last_name'],$_POST['password'],$date);
       
    }
	   
?>


<body>


<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Register to our Shop</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form id="register-form" class="form" action="" method="post">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="userid" placeholder="ID" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="passwordtest" placeholder="Re-type Password" required />
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="first_name" placeholder="First Name" />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="last_name" placeholder="Last Name" required />
              </div>
            </div>
          </div>
          <div class="input_field radio_option">
            <input type="radio" name="radiogroup1" id="rd1">
            <label for="rd1">Male</label>
            <input type="radio" name="radiogroup1" id="rd2">
            <label for="rd2">Female</label>
          </div>
          <div class="input_field select_option">
            <select>
              <option>Select a country</option>
              <option>Option 1</option>
              <option>Option 2</option>
            </select>
            <div class="select_arrow"></div>
          </div>
          <div class="input_field checkbox_option">
            <input type="checkbox" id="cb1">
            <label for="cb1">I agree with Bilel Taboubi</label>
          </div>
          <div class="input_field checkbox_option">
            <input type="checkbox" id="cb2">
            <label for="cb2">I want to receive offers</label>
          </div>
          <input class="button redcolor" type="submit" value="Register" />
          <a href="login.php" class="text-info">Sign in</a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
