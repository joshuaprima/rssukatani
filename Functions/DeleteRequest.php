<?php
require_once 'connection.php' ;

$con      = getDB();
$id = $_GET['id'];

$query     = "DELETE FROM permintaan WHERE idpermintaan = '$id'";
$sql       = mysqli_query($con,$query); 

if ($sql) {
    echo "<script type=\"text/javascript\">
          alert(\"Data is deleted.\");
          window.location = \"../requestList.php\"
          </script>";		
}else{
    echo "<script type=\"text/javascript\">
          alert(\"Failed to delete data.\");
          window.location = \"../requestList.php\"
          </script>";		
}
?>