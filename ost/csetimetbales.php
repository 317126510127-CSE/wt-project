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


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">StudentCorner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="cse.php"><a href="#">Meetings</a></li>
      <li><a href="active">Timetables</a></li>
      <li><a href="cseexams.php">Exams</a></li>
      <li><a href="cseacademic.php">Academic</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>CSE STUDENT CIRCULARS</h3>
  <p></p>
</div>

</body>
</html>



<?php 

include "config.php";
$sql = mysqli_query($con,"SELECT * FROM filestable where Department= 'cse'  and type='Student'  and  Category='timetables'");
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

</body>
</html>