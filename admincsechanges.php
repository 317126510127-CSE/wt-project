<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript">
    window.history.forward();
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    background-color: #e6e9f0;
  }

  .jumbotron {
    background-color:#224749;
    color: white;
    padding: 100px 20px;
    font-family: Montserrat, sans-serif;
    margin:0;
  
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
 }
 h3{
  font-style: italic;
  font-weight: bold;
 }
 .btn{
    padding: 15px 50px;
     background-color:#98e9d4 ;
    color: white;
    border: #4d4f79;
  }
  .btn:hover{
    background-color: #e4e9ea;
    color: black;
  }
 .btn{
    color: black !important;
    padding: 15px 50px;
    font-weight: bold;
    font-size: 15px;
     border-top: 2px solid black;   
 }
 .btn-group-vertical
 {
  top:70%;
  left:25%;
  position:absolute;
 }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        <!--<li><a href="adminhome.php">Home Page</a></li>-->
      </ul>
    </div>
</nav>

<div class="jumbotron text-center">
  <h1>Circulars</h1> 
  <p>we provide circulars</p>
  <h3>CSE</h3> 
</div>
<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<div class="btn-group-vertical">
 <form action="circular1.php">
   <button type="submit" style="width:300%;" class="btn btn-primary">Create Circular</button>
 </form>
  <form action="adminupdate.php">
   <button type="submit" style="width:300%;" class="btn btn-primary">Upload</button>
 </form>
 <form action="adminview.php">
   <button type="submit" style="width:300%;" class="btn btn-primary">View</button>
 </form>
 <!--
  <form action="admindelete.php">
    <button type="submit"style="width: 300%;" class="btn btn-primary">Delete </button>
  </form>

  <form action="https://accounts.google.com/signin/v2/challenge/pwd?continue=https%3A%2F%2Fmail.google.com%2Fmail&passive=1209600&hl=en-GB&sacu=1&acui=1&rrsp=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&TL=APDPHBA4OdhY2xuvXjlDDKvxmsboggeCnyDNnBCtqqKc5vreLP2lHCwH_jyuypFx&cid=1&navigationDirection=forward">
   <button type="submit" style="width: 300%;" class="btn btn-primary">E-mail </button>
  </form>
-->
  <!--
  <form action="adminview.php">
   <button type="submit" style="width: 300%;" class="btn btn-primary">View </button>
  </form>
-->
</div>


</body>
</html>