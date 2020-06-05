<?php
include 'sessions.php';
include 'getInventoryData.php';
require_once 'connection.php';

    $con = getDB();
    $con2 = getDB();

    $empID = $_SESSION['empID'];
    $invID = $_GET['id'];
    $nama = $_POST['InvName'];
    $distributor = $_POST['InvDist'];
    $type = $_POST['InvTypes'];
    $quantity = $_POST['InvQty'];
    $satuan = $_POST['InvMeasurement'];
    $desc = $_POST['InvDesc'];
    $harga = $_POST['InvPrice'];
    $blud = $_POST['InvBlud'];
    $custom = $_POST['InvCustExpire'];
    $bludbefore = $data['tanggal_blud'];
    $deskripsi = $data['nama']." BLUD ". $bludbefore .". Edited as ".$nama ." ".$quantity." ".$satuan.". BLUD ".$blud. " In inventory " .$type;
    $status = "EDIT";

    if($custom == ""){
        $custom = $data['expired_date'];
      }else{

      }

    $query = "UPDATE barang SET nama='$nama', distributor='$distributor', quantity='$quantity', satuan='$satuan', deskripsi='$desc', harga_satuan='$harga', tanggal_blud='$blud', cust_expired_date='$custom', types='$type' WHERE idbarang='$invID'";
    $sql = mysqli_query($con,$query);

    $query2 = 
    "INSERT INTO logbarang (idpegawai,idbarang,jumlah,deskripsi,status)
    VALUES('$empID','$invID','$quantity','$deskripsi','$status')";

    $sql2 = mysqli_query($con2,$query2);

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
            alert(\"Perubahan Gagal\");
            window.location = \"../inventoryList.php\"
            </script>";
        }
        else{
            echo "<script type=\"text/javascript\">
            alert(\"Perubahan Berhasil.\");
            window.location = \"../inventoryList.php\"
            </script>";
        }
    }
    else{
        echo "<script type=\"text/javascript\">
        alert(\"Perubahan Gagal\");
        window.location = \"../inventoryList.php\"
        </script>";
    }
?>