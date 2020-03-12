<?php
include "config.php ";
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database




    $sql = "SELECT * FROM filestable WHERE id=$id";
    $result = mysqli_query($con, $sql);
     $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads2/' . $file['name'];
/*
    while($row = $result->fetch_object()){
  $pdf = $row->filename;
  $path = $row->directory;
  $date = $row->created_date;
  $file = $path.$pdf;
}
*/
// Add header to load pdf file
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="' .$file. '"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file); 
}
?>

    <iframe src="<?php echo $filepath.$pdf; ?>" width="90%" height="500px">
</iframe>