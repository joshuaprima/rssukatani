<?php 
require_once 'connection.php' ;
include 'generateUUID.php' ;
$con = getDB();
$con2 = getDB(); 

if(isset($_POST['submit'])) {
    $empID = "1";
    $uuid = gen_UUID();
    $item = $_POST['InvName'];
    $distributor = $_POST['InvDist'];
    $types = $_POST['InvTypes'];
    $quantity = $_POST['InvQty'];
    $satuan = $_POST['InvMeasurement'];
    $desc = $_POST['InvDesc'];
    $price = $_POST['InvPrice'];
    $blud = $_POST['InvBlud'];
    $customExp = $_POST['InvCustom'];
    $deskripsi = "Example Description";
    $status = "Added";
    $expiredDate = date('Y-m-d ', strtotime('+1825 days'));

    $query = 
    "INSERT INTO barang (idbarang, nama, distributor, quantity,satuan,deskripsi,harga_satuan,tanggal_blud,cust_expired_date, expired_date, types)
    VALUES('$uuid','$item','$distributor','$quantity','$satuan','$desc','$price','$blud','$customExp','$expiredDate','$types')";

    $query2 = 
    "INSERT INTO itemlog (idpegawai,idbarang,jumlah,deskripsi,status)
    VALUES('$empID','$uuid','$quantity','$deskripsi','$status')";
      
    $sql = mysqli_query($con,$query);
    
    $sql2 = mysqli_query($con2,$query2);
    
    if ($sql) {
        echo "<script type=\"text/javascript\">
        alert(\"Penambahan Barang Berhasil!\");
        
        window.location = \"../index.php\"
      </script>" ;
    } else {
        echo "<script type=\"text/javascript\">
        alert(\"Penambahan Barang Gagal!\");
        
        window.location = \"../newInventory.php\"
      </script>";
    }
    
}
?>