<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Input Page</title>
    <link href="csvpage/styleSheet.css" rel="stylesheet">
</head>
<body>
    <div class="csv-header-area">
       <h1>CSV Input Page</h1> 
    </div>
    <div class="csv-content-area">
        <div class="csv-form-area">
            <span class="form-text-area">
                Click "Choose File" button to upload a file
            </span>
            <div class="csv-browse-area">
                <input type="file" id="csvFile"/>
            </div>
        </div>
        <div class="csv-fbutton-area">
            <div class="submit-button">
                <button>Submit</button>
            </div>
            <div class="reset-button">
                <button>Delete</button>
            </div>
        </div>
    </div>
    <div class="csv-table-area">
        table
    </div>
    <div class="csv-footer-area">
        <div class="manual-page-button">
            <li><a href="index.php">Manual Input Page</a></li>
        </div>
        <div class="process-page-button">
            <li><a href="process.php">Process Page</a></li>
        </div>
        <div class="forecasting-page-button">
            <li><a href="forecasting.php">Forecasting Page</a></li>
        </div>
    </div>
</body>
</html>