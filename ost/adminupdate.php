<!DOCTYPE html>
<html>
<head>
    <title>Insert PDF in MySql using PHP</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body{
        background-color: #0c2346;
    }
    .class1{
         border: 2px solid black;
        margin-top: 150px;
  margin-bottom: 100px;
  margin-right: 200px;
  margin-left: 270px;
  width: 600px;
  padding: 50px;
   font-weight: bold;
   font-size: 19px;
  background-color: white;
    }
   .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
}
.phpf{
  color: green;
}
 .navbar {
    margin-bottom: 0;
    background-color: #04b1a2;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 3 !important;
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

</style>
<center>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        <li><a href="adminhome.php">Home Page</a></li>
        <li><a href="admincsechanges.php">Back</a></li>
      </ul>
    </div>
</nav>

<form class="class1" action="" method="post" enctype="multipart/form-data">
  <!--
Enter file  name:<input type="text" name="filename">
<br>
<br>-->
Select Department:
   <select name="dept" class="dropdownsize" required> 
      <option value=""></option>
      <option value="cse">Computer Science</option>
      <option value="it">Information Technology</option>
      <option value="mech">Mechanical Engineering</option>
     <option value="chem">Chemical Engineering</option>
     <option value="eee">Electrical Engineering</option>
     <option value="civil">Civil Engineering</option>
     <option value="all">all</option>
   </select>
<br><br>
Choose Category:
   <select name="type" class="dropdownsize2" required> 
      <option value=""></option>
      <option value="Student">Student</option>
      <option value="Teacher">Teacher</option>
      <option value="HOD">HOD</option>
   </select>
   <br><br>
Choose Category:
   <select name="category" class="dropdownsize1" required> 
      <option value=""></option>
      <option value="meetings">Meetings</option>
      <option value="sports">Sports</option>
      <option value="academic">Academic</option>
     <option value="seminars">Seminars</option>
     <option value="csi">CSI</option>
     <option value="othercolleges">Other college</option>
   </select>
   <br><br>
 
Choose image:
<br><br>
    <input type="file" name="myfile" accept=”application/pdf />
<br>
Enter the last date for the uploaded circular:
<br><br>
<input type="date" name="lastdate">

<br><br><br>
    <button  type="submit" name="save">Upload</button>
<br><br>
<div class="phpf">
<?php
session_start();
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'file-management');
$sql = "SELECT * FROM filestable";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads2/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $myvar10 = $_POST['dept'];
    $myvar11 = $_POST['category'];
    $lastdate=$_POST['lastdate'];
    $type=$_POST['type'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO filestable (name, size, type,Department,Category,Lastdate) VALUES ('$filename', '$size', '$type','$myvar10','$myvar11','$lastdate')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
  }


?>
</div>
</form>
</body></center>
</html>