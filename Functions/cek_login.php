<?php 
session_start();
require_once 'connection.php';
$con = getDB();

$username   = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM pegawai WHERE username = '$username' AND password = SHA2('$password',256)";

$login = mysqli_query($con,$sql);
$data = mysqli_fetch_array($login);
$cek   = mysqli_num_rows($login);
if($cek > 0) {
    $_SESSION['username'] =$username;
    $_SESSION['empID'] = $data['idpegawai'];
    $_SESSION['status']   ="login";
    $_SESSION['unit'] = $data['unit'];
    $_SESSION['empname'] = $data['nama_pegawai'];
    echo "<script type=\"text/javascript\">
            alert(\"Login Berhasil\");
            window.location = \"../index.php\"
          </script>";
    
    }
else{
    echo "<script type=\"text/javascript\">
            alert(\"Username atau Password Salah\");
            window.location = \"../login.php\"
          </script>";
}
?>