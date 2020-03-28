<?php
    require_once 'connection.php';

    $con = getDB();

    $invID = $_GET['id'];
    $nama = $_POST['InvName'];
    $distributor = $_POST['InvDist'];
    $type = $_POST['InvTypes'];
    $quantity = $_POST['InvQty'];
    $satuan = $_POST['InvMeasurement'];
    $deskripsi = $_POST['InvDesc'];
    $harga = $_POST['InvPrice'];
    $blud = $_POST['InvBlud'];
    $custom = $_POST['InvCustExpire'];

    $query = "UPDATE barang SET nama='$nama', distributor='$distributor', quantity='$quantity', satuan='$satuan', deskripsi='$deskripsi', harga_satuan='$harga', tanggal_blud='$blud', cust_expired_date='$custom', types='$type' WHERE idbarang='$invID'";
    $sql = mysqli_query($con,$query);

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