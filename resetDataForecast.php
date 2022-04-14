<?php
$con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
$deleteData = "DELETE FROM datataksirpenjualan";
$resetCount = "ALTER TABLE datataksirpenjualan AUTO_INCREMENT=1";

$rs = mysqli_query($con, $deleteData);
$rscount = mysqli_query($con, $resetCount);

include 'forecasting.php';
?>