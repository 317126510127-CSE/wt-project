<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOD home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
      .navbar {
    margin-bottom: 0;
    background-color: #04b1a2;
    z-index: 9999;
    border: 0;
    font-size: 15px !important;..
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-brand{
    font-size: 20px;
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
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <!-- <a class="navbar-brand" href="cse.php">StudentCorner</a>-->
    <ul class="nav navbar-nav">
       <li><a class="navbar-brand" href="mechhod.php"><b>CSE HOD Corner</b></a><li>
      <li class="active"><a href="mechhod.php">Meetings</a></li>
      <li><a href="mechhodtimetables.php">Timetables</a></li>
      <li><a href="mechhodexams.php">Exams</a></li>
      <li><a href="mechhodacademic.php">Academic</a></li>
      <li><a href="mechhodsports.php">Sports</a></li>
    <!--  <li><a href="mech1.php">Student Circulars</a></li>
      <li><a href="mech1fac.php">Faculty Circulars</a></li>-->
      <li>&nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
  <!--    <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>-->
         
          <li>  <a class="navbar-brand" href="hodpage.php"><h5>BACK</h5></a></li>
<li>&nbsp &nbsp  </li>
          <li>  <a class="navbar-brand" href="mainpage.html"><h5>LOGOUT</h5></a></li>
          <br>
       
    </ul>
  </div>
</nav>
 <center>
<div class="container">
  <h3>MECHANICAL HOD CIRCULARS</h3>
  <p></p>
</div>

</body>
</html>


<script type="text/javascript">
  window.history.forward();
  function noBack(){window.history.forward();}

</script>

<?php

include "config.php";
//session_start();
$sql = mysqli_query($con,"SELECT * FROM filestable where Department= 'mech'  and type='HOD'  and  Category='meetings' order by Lastdate desc ");
//$result = mysqli_fetch_assoc( $sql);

$files = mysqli_fetch_all($sql, MYSQLI_ASSOC);

//include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    
    <th>Filename   &nbsp &nbsp   &nbsp &nbsp</th>
    <th>size (in mb)   &nbsp &nbsp   &nbsp &nbsp</th>
    <!--<th>Downloads</th>-->
    <th>&nbsp &nbsp   &nbsp &nbsp &nbsp Action &nbsp &nbsp   &nbsp &nbsp</th>
   <th>&nbsp &nbsp   &nbsp &nbsp &nbsp </th>
    <th> LastDate &nbsp &nbsp   &nbsp &nbsp</th>
</thead>

<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['name'];  ?>   &nbsp &nbsp   &nbsp &nbsp</td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?>   &nbsp &nbsp   &nbsp &nbsp</td>
      <!-- <td><a href="view.php?file_id=<?php echo $file['id'] ?>">VIEW    </a> &nbsp /  </td>-->
 <td><a href="uploads2/<?php echo $file['name'] ?>" target="_blank">VIEW    </a> &nbsp &nbsp &nbsp  /  </td>
  <td><a href="delete25.php ?file_id=<?php echo $file['id'] ?>" target="_blank">DELETE  </a>&nbsp    &nbsp &nbsp   &nbsp &nbsp    &nbsp &nbsp   &nbsp &nbsp</td>

         <!-- <td>  <a href="download.php?file_id=<?php //echo $file['id'] ?>">Download</a> &nbsp &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp </td>-->
      <td><?php echo $file['Lastdate'];  ?>  &nbsp &nbsp  &nbsp &nbsp   &nbsp &nbsp</td>

      <!--<td><?php echo $file['downloads']; ?></td>-->
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</center>
</body>
</html>