<?php
include 'sessions.php';
require_once 'connection.php';

    $con = getDB();

    $empID = $_SESSION['empID'];

if($_SESSION['unit']=='Administrator')
{
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=backup.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('idperubahan', 'idbarang', 'idpegawai', 'jumlah', 'status', 'deskripsi','tgl_perubahan'));  
    $query = "SELECT * from logbarang";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }

    fputcsv($output, array('idbarang', 'nama', 'distributor', 'quantity', 'satuan', 'deskripsi', 'harga_satuan', 'tanggal_blud', 'cust_expired_date', 'expired_date','types'));  
    $query = "SELECT * from barang";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }  

    fputcsv($output, array('idpermintaan', 'idpegawai', 'idbarang', 'jumlah', 'deskripsi','tgl_permintaan','status'));  
    $query = "SELECT * from permintaan";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }  

    fputcsv($output, array('idtransaksi', 'idpegawai', 'idpermintaan', 'tgl_transaksi','jumlah_out'));  
    $query = "SELECT * from transaksi";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }  

    fputcsv($output, array('idpegawai', 'nama_pegawai', 'unit', 'username', 'password'));  
    $query = "SELECT * from pegawai";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }  
    fclose($output); 
     
}
else{
    echo "<script type=\"text/javascript\">
    alert(\"Unauthorized Access\");
    window.location = \"index.php\"
  </script>";
  }
    

?>