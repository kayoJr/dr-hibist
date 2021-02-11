<?php
$msg = " ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Hibist pediatrician</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script src="./js/main.js"></script>
</head>

<body>
    <form action="includes/libs.php" method="post" id="myForm">
        <div class="logo">
            <img src="./img/logo.png" alt="logo">
        </div>
        <h1>
            <span class="txt-type" data-wait="2000" data-words='["dr hibist pediatrician"]'></span>
        </h1>
        <div class='text'><?php @ $msg = $_REQUEST['msg'];
echo $msg;?></div>
        <div class="formElement">
            <input type="text" name="uname" id="uname" autocomplete="off" required>
            <label for="uname" class="labelName"><span class="contentName">User Name</span></label>
        </div>
        <div class="formElement">
            <input type="password" name="pass" id="pass" autocomplete="on" required>
            <label for="pass" class="labelName"><span class="contentName">Password</span></label>
        </div>
        <div>
            <input type="submit" value="Login" class="btn" name="Login" onclick="login()">
        </div>
    </form>
</body>
<script src="./js/login.js"></script>

</html>