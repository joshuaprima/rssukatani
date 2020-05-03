<?php
require_once 'connection.php' ;
$con      = getDB();

$reqID = $_GET['id'];
$query = "SELECT tgl_permintaan, nama_pegawai, unit, idpermintaan, jumlah, nama, types, barang.deskripsi as deskripsi_barang, permintaan.deskripsi as deskripsi_permintaan 
FROM permintaan inner join barang on permintaan.idbarang = barang.idbarang inner join pegawai on permintaan.idpegawai = pegawai.idpegawai where idpermintaan='$reqID'";
$sql = mysqli_query($con, $query);
$data = mysqli_fetch_array($sql);
?>
