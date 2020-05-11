<?php include 'sessions.php';?>

<?php 
require_once 'connection.php' ;
$con = getDB(); 

if(isset($_POST['submit'])) {
    $item = $_GET['id'];
    $pegawai = $_SESSION['empID'];
    $quantity = $_POST['Qty'];
    $desc = $_POST['ReqDesc'];
    $datenow = date("Y-m-d H:i:s");

    $get_query = 
    $query = 
    "INSERT INTO permintaan (idbarang, idpegawai, jumlah, deskripsi, tgl_permintaan, status)
    VALUES('$item','$pegawai','$quantity','$desc','$datenow','Waiting')";
    
    $sql = mysqli_query($con,$query);
    
    if ($sql) {
        echo "<script type=\"text/javascript\">
        alert(\"Permintaan Barang Berhasil Dikirim!\");
        
        window.location = \"../requestList.php\"
      </script>" ;
    } else {
        echo "<script type=\"text/javascript\">
        alert(\"Permintaan Barang Gagal!\");
        
        window.location = \"../inventoryReqList.php\"
      </script>";
    }
    
}
?>