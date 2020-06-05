<?php
    require_once 'connection.php';
    $con = getDB();

    $invID = $_GET['id'];
    $query = "SELECT  *  FROM  barang Where idbarang='$invID'";
    $sql = mysqli_query($con, $query);
    $data = mysqli_fetch_array($sql);
?>