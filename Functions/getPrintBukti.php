<?php
require_once 'connection.php' ;
$con      = getDB();

$reqID = $_GET['id'];
$query = "SELECT tgl_transaksi, idtransaksi, jumlah_out, nama_pegawai, unit, transaksi.idpermintaan, permintaan.idpermintaan, jumlah, nama, types, barang.deskripsi as deskripsi_barang, permintaan.deskripsi as deskripsi_permintaan 
FROM permintaan inner join barang on permintaan.idbarang = barang.idbarang inner join pegawai on permintaan.idpegawai = pegawai.idpegawai inner join transaksi on permintaan.idpermintaan = transaksi.idpermintaan where transaksi.idpermintaan='$reqID'";
$sql = mysqli_query($con, $query);
$data = mysqli_fetch_array($sql);
?>
