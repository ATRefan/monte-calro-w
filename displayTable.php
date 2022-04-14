<?php
    $con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
    $sql = "SELECT * FROM dataPenjualan";
    $rstable = mysqli_query($con,$sql);
?>