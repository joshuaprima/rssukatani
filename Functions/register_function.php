<?php include 'connection.php' ;
include 'generateUUID.php' ;
$con = getDB(); 

if(isset($_POST['submit'])) {
    $uuid = gen_UUID();
    $employee = $_POST['EmpName'];
    $unit = $_POST['DeptUnit'];
    $username = $_POST['UserName'];
    $password = $_POST['UserPassword'];

    $query = 
    "INSERT INTO pegawai (idpegawai,
    nama_pegawai, unit, username,password )VALUES('$uuid','$employee','$unit','$username',SHA2('$password',256))";
    $sql = mysqli_query($con,$query);
    
    if ($sql) {
        echo "<script type=\"text/javascript\">
        alert(\"Pembuatan Akun Berhasil!\");
        
        window.location = \"../index.php\"
      </script>" ;
    } else {
        echo "<script type=\"text/javascript\">
        alert(\"Pembuatan Akun Gagal!\");
        
        window.location = \"../register.php\"
      </script>";
    }
    
}
?>