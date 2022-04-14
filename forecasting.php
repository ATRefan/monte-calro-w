<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecasting Page</title>
    <link href="forecastingpage/styleSheet.css" rel="stylesheet">
</head>
<body>
    <div class="forecasting-header-area"><h1>Forecasting Page</h1></div>
    <div class="forecasting-content-area">
        <div class="forecasting-page-nav">
            <div class="nav-button">
                <div class="manual-page-button">
                    <li><a href="index.php">Manual Input Page</a></li>
                </div>
                <div class="csv-page-button">
                    <li><a href="csv.php">CSV Input Page</a></li>
                </div>
                <div class="process-page-button">
                    <li><a href="process.php">Process Page</a></li>
                </div>
                <form class="manual-form-area" name="formManual" method="post" action="forecast-table.php" onsubmit="alert('Data berhasil diinput');">
                    <div class="form-input-area">
                        <div class="form-text-area">
                            Input data
                        </div>
                        <div class="form-box-area">
                            <input id="manual-input-box" type="number" name="numberInput"><br>
                        </div>
                    </div>
                    <div class="form-button-area">
                        <div class="form-submit-button">
                            <button id="manual-input-button" type="submit" name="submitManual" value="Submit">Input</button>
                        </div>
                    </div>
                </form>
                <form class="reset-button" action="resetDataForecast.php" method="post" onsubmit="alert('Data berhasil dihapus')">
                    Klik "Reset" untuk menghapus seluruh data
                    <button id="manual-reset-button" type="submit" name="resetManual">Reset</button>
                </form>
            </div>
        </div>
        <div class="forecasting-data-table">
        <?php
            include"forecast-tool.php";
            echo"<table border=1>
            <tr>
            <th>Minggu ke</th>
            <th>Angka acak</th>
            <th>Permintaan</th>
            </tr>";
            while($row = mysqli_fetch_array($rstable)){
                echo "<tr>";
                echo "<td>" . $row['minggu'] . "</td>";
                echo "<td>" . $row['angkaAcak'] . "</td>";
                echo "<td>" . $row['permintaan'] . "</td>";
                echo "</tr>";
            }
            echo"</table>";
            ?>
        </div>
    </div>
</body>
</html>