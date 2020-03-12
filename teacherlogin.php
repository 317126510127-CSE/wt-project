<!DOCTYPE html>
<html lang="en">
<head>
	<script language="javascript">
		window.history.forward();
	</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>faculty login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login .close {
        position: absolute;
		top: -10px;
		right: -10px;
	}
	.modal-login h4 {
		color: #636363;
		text-align: center;
		font-size: 26px;
		margin-top: 0;
	}
	.modal-login .modal-content {
		color: #999;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
    }
	.modal-login .form-group {
		color:black;
		margin-bottom: 20px;
	}
	.modal-login label {
		font-weight: normal;
		font-size: 13px;
	}
	.modal-login .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
		color:black;
	}
	.modal-login .form-control:focus {
		border-color: #ccc;
	}
	.modal-login .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
		border-radius: 0;
		color:black;
	}
    .modal-login .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #179b81;
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer {
		color: #999;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -25px -25px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login a {
		color: black;
		text-decoration: underline;
	}
	.modal-login a:hover {
		text-decoration: none;
	}
	.modal-login a {
		color:black;
		text-decoration: none;
	}	
	.modal-login a:hover {
		text-decoration: underline;
	}
	.modal-login .fa {
		font-size: 21px;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	  .navbar {
    margin-bottom: 0;
    background-color: #04b1a2;
    z-index: 9999;
    border: 0;
    font-size: 18px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default {
    border-color: transparent;
    color: #fff !important;
  }
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
    	    <center><h3><i><b>Faculty Login</b></i></h3></center>
    	         

      
      <ul class="nav navbar-nav navbar-right">
        
      <!--<li><a href="">Student Login</a></li>-->
      
        <li><a href="index.php">HOME</a></li>
      </ul>
    </div>
</nav>
<br><br><br>
<br><br><br>
<?php
session_start();
$con=mysqli_connect("localhost","root","","faculty");
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
       $username=$_POST['username']; 
    $password=$_POST['password'];  
  $_SESSION["username"]=$username;
  $dept=$_POST['dept'];
  //echo $dept;
  $user=$username;
        $query = "SELECT * FROM `faculty` WHERE username='$username'
and password='$password' and branch='$dept'";
	$result = mysqli_query($con,$query) or die(mysql_error());//Performs a query on the database
	//die:Print a message and terminate the current script
	$rows = mysqli_num_rows($result);//The mysqli_num_rows function is used to get the number of rows returned from a select query.
    //    echo $dept;
          if ($rows==1 and $dept=="ece")
{
	header("Location:ecefac5.php");
	 //echo $dept;
}
elseif($rows==1 and $dept=="cse")
        {
	    $_SESSION["username"] = $username;
            // Redirect user to index.php
	   
	    header("Location:csefac5.php");
	   //  echo $dept;
         }

elseif ($rows==1 and $dept=="eee")
{

	header("Location:eeefac5.php");
}
elseif ($rows==1 and $dept=="mech")
{

	header("Location:mechfac5.php");
	//echo $dept;
}

elseif ($rows==1 and $dept=="civil")
{

	header("Location:civilfac5.php");
}
elseif ($rows==1 and $dept=="chemical")
{

	header("Location:chemicalfac5.php");
}
else if ($rows==1 and $dept=="it")
{

	header("Location:itfac5.php");
}
/*else if($rows==1 and $dept=="all")
{
header("Location:allfac.php");
//echo $dept;
}*/
else
{
//header("Location:teacherlogin.php");
	echo '<script type="text/javascript">';
   echo 'alert("Invalid username or password")';
  // echo 'window.location.href = "studentlogin1.php"';
	echo '</script>';
}


 }
?>

<!--
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <center><h1>STUDENT LOGIN</h1></center>

      </ul>
    </div>
</nav>
-->














<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Sign In</h4>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>


					<center><div class="form-group" >
							<div class="input-group">
							<!--<span class="input-group-addon"><i class="fa fa-branch"></i></span>-->
						Select Department:
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
<br><br>
</div>
<center>


					<div class="form-group">
					
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					
					</div>
				</form>
		</div>
	</div>
<?php ?>
</body>
</html>                            