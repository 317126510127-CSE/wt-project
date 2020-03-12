<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript">
  window.history.forward();
  function noBack(){window.history.forward();}

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
  .thumbnail:hover {
  transform: scale(1.1); 
}
   
  </style>
  }
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
                <li><a href="adminview.php">BACK</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
</nav>

<div class="jumbotron text-center">
  <h1>Circulars</h1> 
  <p>we provide circulars</p> 
</div>
<br>
<br><br>
<div id="dept" class="container-fluid text-center">
<div class="row text-center slideanim">

<div class="col-sm-4">
      <div class="thumbnail">
<form action="csehod.php">      
 <input type="image" class="cse"  src="cse.jpg" alt="cse" width="400" height="200">
 </form>
       </div>
</div>
 
 <div class="col-sm-4">
      <div class="thumbnail">
 <form action="ecehod.php">     
 <input type="image" class="ece"  src="ece.jpg" alt="ece" width="400" height="200">
 </form>
       </div>
</div>

<div class="col-sm-4">
      <div class="thumbnail">
 <form action="eeehod.php">         
 <input type="image" class="eee"  src="eee.jpg" alt="eee" width="400" height="200">
 </form>
       </div>
</div>
</div>
</div>

<br><br>

<div id="dept" class="container-fluid text-center">
<div class="row text-center slideanim">
<div class="col-sm-4">
      <div class="thumbnail">
 <form action="ithod.php">          
 <input type="image" class="it"  src="it.jpg" alt="it" width="400" height="200">
 </form>
      </div>
</div>

<div class="col-sm-4">
      <div class="thumbnail">
 <form action="mechhod.php">          
 <input type="image" class="mech"  src="mech.jpg" alt="mech" width="400" height="200">
 </form>
      </div>
</div>

<div class="col-sm-4">
      <div class="thumbnail">
<form action="chemicalhod.php">   
 <input type="image" class="chem"  src="chemical.jpg" alt="chem" width="400" height="200">
 </form>
      </div>
</div>
</div>
</div>

<br><br>

<div id="dept" class="container-fluid text-center">
<div class="row text-center slideanim">
<div class="col-sm-4">
      <div class="thumbnail">
<form action="civilhod.php">          
 <input type="image" class="civil"  src="civil.jpg" alt="civil" width="400" height="200">
 </form>
      </div>
</div>
<!--
<div class="col-sm-4">
      <div class="thumbnail">
<form action="allhod.php">          
 <input type="image" class="all"  src="others.jpg" alt="all" width="400" height="200">
 </form>

      </div>
</div>
-->
</div>
</div>
</body>
</html>