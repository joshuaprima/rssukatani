<?php
    require_once 'connection.php' ;
    $con = getDB();


    $reqId = $_GET['id'];
    $reqOut = $_GET['out'];
    $dateNow = date("Y-m-d H:i:s");
    $idSession = $_SESSION['empID'];

    $query2 = "SELECT tgl_permintaan, nama_pegawai, unit,idpermintaan, jumlah, nama, types, barang.deskripsi AS deskripsi_barang, permintaan.deskripsi AS deskripsi_permintaan FROM permintaan inner join barang on permintaan.idbarang = barang.idbarang inner join pegawai on permintaan.idpegawai = pegawai.idpegawai WHERE idpermintaan='$reqId'";
    $sql2 = mysqli_query($con, $query2);
    $data = mysqli_fetch_array($sql2);

    $query3 = "SELECT * FROM pegawai WHERE idpegawai='$idSession'";
    $sql3 = mysqli_query($con, $query3);
    $data2 = mysqli_fetch_array($sql3);
?>