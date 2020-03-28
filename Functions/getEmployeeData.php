<?php
    require_once 'connection.php' ;
    $con      = getDB();

    $empID = $_GET['id'];
    $query = "SELECT  *  FROM  pegawai Where idpegawai='$empID'";
    $sql = mysqli_query($con, $query);
    $data = mysqli_fetch_array($sql);
    ?>