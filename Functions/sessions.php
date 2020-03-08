<?php include 'connection.php' ;
      $con = getdb();
      session_start();
      
      if (isset($_SESSION['status']) == false) {
        echo "<script type=\"text/javascript\">
        alert(\"Silahkan Login\");
        
        window.location = \"login.php\"
      </script>";
      }
?>