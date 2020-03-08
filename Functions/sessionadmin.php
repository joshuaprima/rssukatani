<?php 
    if ($_SESSION['unit']=='Administrator'){
    }
    else{
      echo "<script type=\"text/javascript\">
      alert(\"Unauthorized Access\");
      window.location = \"index.php\"
    </script>";
    }
?>