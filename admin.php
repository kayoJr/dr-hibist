<?php
require 'includes/auth.php';
require 'includes/pros.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Admin</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li class="active"><a href="admin.php">Home</a></li>
            <li><a href="admin_rec.php">Reception</a></li>
            <li><a href="admin_phar.php">Pharmacy</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <h1>Daily Income</h1>
        <div class="dates">
            <div class="current">
                <p>date goes here<?php echo " " . date("Y/m/d"); ?></p>
            </div>
            <div class="pickDate">
                <div>
                    <label for="birthday">Pick A Date:</label>
                    <input type="date" id="date" name="date">
                </div>
            </div>
        </div>
        <div class="total">
            <div class="eachTotal">
                <div class="frontDetail">

                    <h3>Reception</h3>
                    <p> Birr</p>
                </div>

                <div class="overlay">
                    <a class="btn" href="admin_rec.php">Detail</a>
                </div>
            </div>
            <div class="eachTotal">
                <div class="frontDetail">

                    <h3>Pharmacy</h3>
                    <p><?php total()?>Birr</p>
                </div>

                <div class="overlay">
                    <a class="btn" href="admin_phar.php">Detail</a>
                </div>
            </div>
            <div class="eachTotal">
                <div class="frontDetail">

                    <h3>Total</h3>
                    <p><?php total()?>Birr</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>