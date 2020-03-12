<?php 
require_once 'connection.php' ;

$con      = getDB();

$empID = $_GET['id'];
$employee = $_POST['EmpName'];
$unit = $_POST['DeptUnit'];
$username = $_POST['UserName'];
$password = $_POST['UserPassword'];

if ($password == "")
{ $query = "UPDATE pegawai SET nama_pegawai='$employee', unit='$unit', username='$username' WHERE idpegawai='$empID'";
    $sql = mysqli_query($con,$query); 

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.location = \"../index.php\"
        </script>";	
        }
        else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Berhasil.\");
        window.location = \"../index.php\"
        </script>";	
        }	
            }
    else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.location = \"../index.php\"
        </script>";	
        }
} else {  
    $query = "UPDATE pegawai SET nama_pegawai='$employee', unit='$unit', username='$username', password=SHA2('$password',256) WHERE idpegawai='$empID'";
    $sql = mysqli_query($con,$query); 

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.location = \"../index.php\"
        </script>";	
        }
        else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Berhasil.\");
        window.location = \"../index.php\"
        </script>";	
        }	
            }
    else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.location = \"../index.php\"
        </script>";	
        }

}

?>