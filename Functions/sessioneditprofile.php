<?php
if (isset($_GET["id"])){ 
$empID = $_GET['id'];
    if ($empID == ""){
        echo "<script type=\"text/javascript\">
      alert(\"Unauthorized Access\");
      window.location = \"index.php\"
    </script>";
    }
    else{
      
    }
}
else{
    echo "<script type=\"text/javascript\">
      alert(\"Unauthorized Access\");
      window.location = \"index.php\"
    </script>";
}
?>