<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monte Carlo Homepage</title>
    <link href="styleSheet.css" rel="stylesheet">
</head>
<body>
    <div class="manual-header-area">
        <h1 class="manual-title">Manual Input Page</h1>
    </div>
    <div class="manual-content-area">
        <div class="navigation-area">
            <div class="csv-page-nav">
                <li><a href="csv.php">CSV Input Page</a></li>
            </div>
            <div class="process-page-nav">
                <li><a href="process.php">Process Page</a></li>
            </div>
            <div class="forecasting-page-nav">
                <li><a href="forecasting.php">Forecasting Page</a></li>
            </div>
        </div>
        <form class="manual-form-area" name="formManual" method="post" action="mainInput.php" onsubmit="alert('Data berhasil diinput');">
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
        <form class="reset-button" action="resetData.php" method="post" onsubmit="alert('Data berhasil dihapus')">
            Klik "Reset" untuk menghapus seluruh data
            <button id="manual-reset-button" type="submit" name="resetManual">Reset</button>
        </form>
    </div>
    <div class="table-area">
        <div class="data-table">
            <?php
            include"displayTable.php";
            echo"<table border=1>
            <tr>
            <th>Minggu ke</th>
            <th>Penjualan</th>
            </tr>";
            while($row = mysqli_fetch_array($rstable)){
                echo "<tr>";
                echo "<td>" . $row['minggu'] . "</td>";
                echo "<td>" . $row['penjualan'] . "</td>";
                echo "</tr>";
            }
            echo"</table>";
            ?>
        </div>
    </div>
</body>
</html>