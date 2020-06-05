<?php
include 'sessions.php';
require_once 'connection.php';

    $con = getDB();

    $empID = $_SESSION['empID'];

if($_SESSION['unit']=='Administrator')
{
    $query = "TRUNCATE TABLE transaksi";  
    $result = mysqli_query($con, $query);  
    if ($result) {
      $query2 = "DELETE FROM permintaan WHERE status='Accepted'";  
      $result2 = mysqli_query($con, $query2);
        if (mysqli_affected_rows($con) > 0) {  
          echo "<script type=\"text/javascript\">
          alert(\"Reset Log Transaksi Berhasil!\");
        
          window.location = \"../index.php\"
        </script>" ;
        }
        else if (mysqli_affected_rows($con) == 0) {  
          echo "<script type=\"text/javascript\">
          alert(\"Data has already been reset!\");
        
          window.location = \"../index.php\"
        </script>" ;
        }
        else {
          echo "<script type=\"text/javascript\">
          alert(\"Reset Log Transaksi Gagal!\");
        
          window.location = \"../newInventory.php\"
          </script>";
        }
    } else {
        echo "<script type=\"text/javascript\">
        alert(\"Reset Log Transaksi Gagal!\");
        
        window.location = \"../newInventory.php\"
      </script>";
    }
}
else{
    echo "<script type=\"text/javascript\">
    alert(\"Unauthorized Access\");
    window.location = \"index.php\"
  </script>";
  }
    

?>