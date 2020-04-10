<?php
    require_once 'connection.php' ;
    $con      = getDB();

    $ID_permintaan = $_GET['id'];
    $query = "SELECT permintaan.idpermintaan, permintaan.idbarang, permintaan.jumlah, permintaan.deskripsi, barang.nama, barang.quantity
    FROM permintaan
    INNER JOIN barang
    ON permintaan.idbarang=barang.idbarang 
    WHERE idpermintaan='$ID_permintaan'";
    $sql = mysqli_query($con, $query);
    $data = mysqli_fetch_array($sql);
    ?>