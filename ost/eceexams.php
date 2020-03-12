<!DOCTYPE html>
<html lang="en">
<head>
  <title>student home</title>
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
    <div class="navbar-header">
      <a class="navbar-brand" href="eee.php">StudentCorner</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="ece.php">Meetings</a></li>
      <li><a href="ecetimetables.php">Timetables</a></li>
      <li class="active"><a href="eceexams.php">Exams</a></li>
      <li><a href="eceacademic.php">Academic</a></li>
      <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
          
          <li>  <a class="navbar-brand" href="studentpage.php"><h5>BACK</h5></a></li>
<li>&nbsp &nbsp  </li>
          <li>  <a class="navbar-brand" href="mainpage.html"><h5>LOGOUT</h5></a></li>
          <br>
        
    </ul>
  </div>
</nav>
  <center>
<div class="container">
  <h3>ECE STUDENTS CIRCULARS</h3>
  <p></p>
</div>

</body>
</html>



<?php 

include "config.php";
$sql = mysqli_query($con,"SELECT * FROM filestable where Department= 'ece'  and type='Student'  and  Category='exams'");
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
    <th>ID   &nbsp &nbsp   &nbsp &nbsp</th>
    <th>Filename   &nbsp &nbsp   &nbsp &nbsp</th> 
    <th>size (in mb)   &nbsp &nbsp   &nbsp &nbsp</th> 
    <!--<th>Downloads</th>-->
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id'];  ?>   &nbsp &nbsp   &nbsp &nbsp</td>  
      <td><?php echo $file['name'];  ?>   &nbsp &nbsp   &nbsp &nbsp</td> 
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?>   &nbsp &nbsp   &nbsp &nbsp</td> 
      <!--<td><?php echo $file['downloads']; ?></td>-->
      <td><a href="download.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</center>
</body>
</html>