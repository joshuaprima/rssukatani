<?php
    require_once 'connection.php' ;
    $con = getDB();

    $reqId = $_GET['id'];
    $reqOut = $_POST['reqOut'];
    $dateNow = date("Y-m-d H:i:s");
    $idSession = $_SESSION['empID'];

    $query1 = "UPDATE permintaan SET status='Accepted' WHERE idpermintaan='$reqId'";
    $sql = mysqli_query($con,$query1);

    if ($sql) {
        if(mysqli_affected_rows($con)==0){
            echo "<script type=\"text/javascript\">
                alert(\"Perubahan Gagal\");
                window.location = \"../rssukatani/requestManage.php\"
                </script>";
        }else{
            $query2 = "SELECT permintaan.idbarang as id_barang, tgl_permintaan, nama_pegawai, unit, idpermintaan, jumlah, nama, types, quantity, barang.deskripsi AS deskripsi_barang, permintaan.deskripsi AS deskripsi_permintaan FROM permintaan inner join barang on permintaan.idbarang = barang.idbarang inner join pegawai on permintaan.idpegawai = pegawai.idpegawai WHERE idpermintaan='$reqId'";
            $sql2 = mysqli_query($con, $query2);
            $data = mysqli_fetch_array($sql2);

            $stokbaru = $data['quantity']-$reqOut;
            $idbar = $data['id_barang'];
            $query3 = "UPDATE barang SET quantity='$stokbaru' WHERE idbarang='$idbar'";
            $sql3 = mysqli_query($con,$query3);

            $query4 = "SELECT * FROM pegawai WHERE idpegawai='$idSession'";
            $sql4 = mysqli_query($con, $query4);
            $data2 = mysqli_fetch_array($sql4);

            $query5 = "INSERT INTO transaksi (idpegawai, idpermintaan, tgl_transaksi, jumlah_out) VALUES ('$idSession','$reqId','$dateNow','$reqOut')";
            $sql5 = mysqli_query($con, $query5);
        }
    }
    else{
        echo "<script type=\"text/javascript\">
            alert(\"Gagal Terhubung\");
            window.location = \"../rssukatani/requestManage.php\"
            </script>";
    }
?>