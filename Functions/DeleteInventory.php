<?php
include 'sessions.php';
require_once 'connection.php' ;
include 'getInventoryData.php';

$con      = getDB();
$id = $_GET['id'];
$empID = $_SESSION['empID'];
$bludbefore = $data['tanggal_blud'];
$quantity = $data['quantity'];
$satuan = $data ['satuan'];
$deskripsi = "Delete Item ".$data['nama']." ".$quantity." ".$satuan.". BLUD ".$bludbefore;
$status = "DELETE";

$query     = "DELETE FROM barang WHERE idbarang = '$id'";
$sql       = mysqli_query($con,$query); 

if ($sql) {
    echo "<script type=\"text/javascript\">
          alert(\"Data is deleted.\");
          window.location = \"../index.php\"
          </script>";		
$query2     = "INSERT INTO logbarang (idpegawai,idbarang,jumlah,deskripsi,status) VALUES ('$empID','$id','$quantity','$deskripsi','$status')";
$sql2       = mysqli_query($con,$query2); 
}else{
    echo "<script type=\"text/javascript\">
          alert(\"Failed to delete data.\");
          window.location = \"../index.php\"
          </script>";		
}
?>