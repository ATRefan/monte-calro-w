<?php

if(isset($_POST['numberInput'])){
    $con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
    $numberName = $_POST['numberInput'];
    $sql = "INSERT INTO `dataPenjualan` (`minggu`, `penjualan`) VALUES ('0', '$numberName')";
    $rs = mysqli_query($con, $sql);
    include 'index.php';
}

header("location: index.php");
exit;
?>