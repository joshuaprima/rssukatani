<?php
    require_once 'connection.php' ;
    $con      = getDB();

    $ID_barang = $_GET['id'];
    $query = "SELECT  *  FROM  barang Where idbarang='$ID_barang'";
    $sql = mysqli_query($con, $query);
    $data = mysqli_fetch_array($sql);
    ?>