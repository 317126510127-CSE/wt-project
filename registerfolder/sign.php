<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
require('config.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes 
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $sql="SELECT  * from `student` where username='$username'";

     $res=mysqli_query($con,$sql) ;
      $rows = mysqli_num_rows($res);
     if ($rows==1) {
     	$message = " Student already exists";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:sign.php");

    }
else{
	
//do your insert code here or do something (run your code)


        $query = "INSERT into `student` (username,password)
VALUES ( '$username','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
$message = "Registered Successfully";
  echo "<script type='text/javascript'>alert('$message');</script>";

        }   } 
}else{
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Signin
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<input class="input100" type="text" name="dept" placeholder="Department">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						
   <select name="dept" class="dropdownsize" required> 
   	<option value=""></option>
      <option value="cse">Computer Science</option>
      <option value="it">Information Technology</option>
      <option value="mech">Mechanical Engineering</option>
     <option value="chem">Chemical Engineering</option>
     <option value="eee">Electrical Engineering</option>
          <option value="ece">Electronics Engineering</option>
     <option value="civil">Civil Engineering</option>
    <!-- <option value="all">all</option>-->
   </select>
   	</span>
					</div>





					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-12">
						
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" >
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php } ?>
</body>
</html>