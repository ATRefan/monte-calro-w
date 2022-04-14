<?php
    $con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
    $sqlfrek2 = "SELECT DISTINCT penjualan, COUNT(minggu),minggu FROM dataPenjualan GROUP BY penjualan ASC";
    $rs2 = mysqli_query($con,$sqlfrek2);
    $sqlentry = "SELECT COUNT(minggu) FROM dataPenjualan";
    $rsentry = mysqli_query($con, $sqlentry);
    $entry = mysqli_fetch_array($rsentry);
?>