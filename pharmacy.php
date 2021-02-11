<?php require 'includes/auth.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/pharmacy.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Pharmacy</title>

</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li class="active"><a href="pharmacy.php">Sell Medicine</a></li>
            <li><a href="sell_history.php">Selling History</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="includes/drug_reg.php" method="post">
            <div class="formElement">
                <input type="text" name="name" id="name" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Medicine Name</span></label>
            </div>
            <div class="formElement">
                <input type="number" name="cost" id="cost" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Cost</span></label>
            </div>
            <div class="formElement">
                <input type="number" name="qua" id="amount" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Quantity</span></label>
            </div>
            <div>
                <input type="submit" value="Login" class="btn" name="Login">
            </div>
        </form>
    </div>
</body>

</html>