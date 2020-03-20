<?php
require_once 'connection.php' ;

$con      = getDB();
$id = $_GET['id'];

$query     = "DELETE FROM barang WHERE idbarang = '$id'";
$sql       = mysqli_query($con,$query); 

if ($sql) {
    echo "<script type=\"text/javascript\">
          alert(\"Data is deleted.\");
          window.location = \"../index.php\"
          </script>";		
}else{
    echo "<script type=\"text/javascript\">
          alert(\"Failed to delete data.\");
          window.location = \"../index.php\"
          </script>";		
}
?>