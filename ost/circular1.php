<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<style type="text/css">
	div.endate{
		position: relative;
		top: 50%;
        left: 70%;
	}
	body{
		font-weight: bold;
		font-size:20px;
	}
	#tit{
	    position: relative;
		top: 50%;
        left: 35%;	
	}
	#sub{
	    position: relative;
		top: 50%;
        left: 5%;	
	}
	#comment{
		font-weight: bold;
        font-size: 16px;
	}
	#bod{
		position: relative;
		top: 50%;
        left: 5%;
	}
	.navbar {
    margin-bottom: 0;
    background-color: #04b1a2;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    margin:0;
  
  }
  .navbar li a {
    color: black !important;
    font-weight: bold;
    font-size: 15px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default {
    border-color: transparent;
    color: #fff !important;
  }
 li{
   display:inline-block;
   font-size: 20px;
 }
</style>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admincsechanges.php">Back</a></li>
      </ul>
    </div>
</nav>
    	<center>  <img src="Capture2.jpg" width=100%></center>

<br>
<form action="samplesc.php" method="post">
<div class="endate"> 
 Select date  :  <input id="datepicker" name="date1" width="276" style="font-weight: bold;" />
</div>


<div class="form-group" id="tit">
      <label for="comment" >Title:</label>
      <textarea class="form-control" rows="2" id="comment" name="tit" style="width:400px;" placeholder="Type ur title...."></textarea>
</div>

<div class="form-group" id="sub">
      <label for="comment" >Sub:</label>
      <textarea class="form-control" rows="2" id="comment" name="sub" style="width:800px;" placeholder="Type ur subject...."></textarea>
</div>

<center>
<div>
	<h2>***</h2>
</div>
</center>

<div class="form-group" id="bod">
      <label for="comment" >body:</label>
      <textarea class="form-control" rows="5" id="comment" name="bod" style="width:1200px;" placeholder="Type ur body...."></textarea>
</div>
<br><br>

<center><input  type="submit" class="btn btn-outline-success" value="Generate Circular" /></center>
</form>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</html>