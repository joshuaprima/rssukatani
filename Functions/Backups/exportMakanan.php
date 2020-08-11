<?php
include 'sessions.php';
require_once 'connection.php';

    $con = getDB();

    $empID = $_SESSION['empID'];

if($_SESSION['unit']=='Administrator')
{
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=InventoryMakanan.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('idbarang', 'nama', 'distributor', 'quantity', 'satuan', 'deskripsi', 'harga_satuan', 'tanggal_blud', 'cust_expired_date', 'expired_date','types'));  
    $query = "SELECT * from barang where types='Makanan Tambahan'";  
    $result = mysqli_query($con, $query); 
    while($row = mysqli_fetch_assoc($result))  
    {  
      fputcsv($output, $row);  
    }
    fclose($output); 
     
}
else if($_SESSION['unit']=='Gudang Umum')
{
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=InventoryMakanan.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('idbarang', 'nama', 'distributor', 'quantity', 'satuan', 'deskripsi', 'harga_satuan', 'tanggal_blud', 'cust_expired_date', 'expired_date','types'));  
    $query = "SELECT * from barang where types='Makanan Tambahan'";  
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