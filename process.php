<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Page</title>
    <link href="processpage/styleSheet.css" rel="stylesheet">
</head>
<body>
    <div class="process-header-area"><h1>Process Page</h1></div>
    <div class="process-content-area">
        <div class="process-page-nav">
            <div class="nav-button">
                <div class="manual-page-button">
                    <li><a href="index.php">Manual Input Page</a></li>
                </div>
                <div class="csv-page-button">
                    <li><a href="csv.php">CSV Page</a></li>
                </div>
                <div class="forecasting-page-button">
                    <li><a href="forecasting.php">Forecasting Page</a></li>
                </div>
            </div>
        </div>
        <div class="process-data-area">
            <div class="process-data-number">
                <?php
                include "processpage/processentry.php";
                echo"<table border=1>
                <tr>
                <th>Permintaan per minggu</th>
                <th>Frekuensi</th>
                <th>Probabilitas</th>
                <th>Probabilitas kumulatif</th>
                <th>Batas bawah interval</th>
                <th>Batas atas interval</th>
                </tr>";
                $countentry = $entry['COUNT(minggu)'];
                while($row = mysqli_fetch_array($rs2)){
                    $countsell = $row['COUNT(minggu)'];
                    echo "<tr>";
                    echo "<td>" . $row['penjualan'] . "</td>";
                    echo "<td>" . $countsell . "</td>";
                    $probability = (int)$countsell/(int)$countentry;
                    echo "<td>" . $probability . "</td>";
                    $cumulative = $probability+$cumulative;
                    echo "<td>" . $cumulative . "</td>"; 
                    $invbegin = 0;
                    $invnext = $invbegin+$cumulative;
                    echo "<td>" . $cumulative-$probability . "</td>";
                    echo "<td>" . $invnext . "</td>";
                    echo "</tr>";
                }
                
                
                
                echo"</table>";
                ?>
                <span>Data entry: 
                    <?php
                    include "processpage/processentry.php";
                    echo $countentry;
                    ?>
                </span>
            </div>
        </div>
    </div>
</body>
</html>