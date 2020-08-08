<?php
include 'sessions.php';
require_once 'connection.php';

    $con = getDB();

    $empID = $_SESSION['empID'];

if($_SESSION['unit']=='Administrator')
{
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=pegawai.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('idpegawai', 'nama_pegawai', 'unit', 'username', 'password'));  
    $query = "SELECT * from pegawai";   
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }
    fclose($output); 
}
else{
    echo "<script type=\"text/javascript\">
    alert(\"Unauthorized Access\");
    window.location = \"index.php\"
  </script>";
  }
    

?>