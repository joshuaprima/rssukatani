<?php 
require_once 'connection.php' ;

$con      = getDB();

$empID = $_GET['id'];
$employee = $_POST['EmpName'];
$unit = $_POST['DeptUnit'];
$username = $_POST['UserName'];
$password = $_POST['UserPassword'];
$currentpass = $_POST['CurrPass'];

$sql2 = "SELECT * FROM pegawai WHERE idpegawai = '$empID' AND password = SHA2('$currentpass',256)";

$query2 = mysqli_query($con,$sql2);
$data = mysqli_fetch_array($query2);
$cek   = mysqli_num_rows($query2);
if($cek > 0) {
    if ($password == "")
        { $query = "UPDATE pegawai SET nama_pegawai='$employee', unit='$unit', username='$username' WHERE idpegawai='$empID'";
        $sql = mysqli_query($con,$query); 

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.history.go(-1);
        </script>";	
        }
        else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Berhasil.\");
        window.location = \"logout.php\"
        </script>";	
        }	
            }
    else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.history.go(-1);
        </script>";	
        }
} else {  
    $query = "UPDATE pegawai SET nama_pegawai='$employee', unit='$unit', username='$username', password=SHA2('$password',256) WHERE idpegawai='$empID'";
    $sql = mysqli_query($con,$query); 

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.history.go(-1);
        </script>";	
        }
        else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Berhasil.\");
        window.location = \"logout.php\"
        </script>";	
        }	
            }
    else{
            echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.history.go(-1);
        </script>";	
        }

}

    }
else{
    echo "<script type=\"text/javascript\">
            alert(\"Password Verification Salah\");
            window.history.go(-1);
          </script>";
}

?>