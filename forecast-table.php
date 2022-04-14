<?php

if(isset($_POST['numberInput'])){
    $con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
    $numberName = $_POST['numberInput'];
    $randomNumber = number_format((float)rand(0,1),2);
    $sql = "INSERT INTO `datataksirpenjualan` (`minggu`, `angkaAcak`, `permintaan`) VALUES ('0','$randomNumber', '$numberName')";
    $rs = mysqli_query($con, $sql);
    include 'forecasting.php';
}

header("forecasting.php");
exit();
?>