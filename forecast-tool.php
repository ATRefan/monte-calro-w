<?php
    $con = mysqli_connect('localhost', 'root', '', 'data_perusahaan');
    $sql = "SELECT * FROM datataksirpenjualan";
    $rstable = mysqli_query($con,$sql);
?>