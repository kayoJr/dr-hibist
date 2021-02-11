<?php require 'includes/auth.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reception.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li class="active"><a href="reception.php">Add Patient</a></li>
            <li><a href="view_patient.php">View Patient</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="includes/reg.php" method="post">
            <div class="formElement">
                <input type="text" name="name" id="name" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Name</span></label>
            </div>
            <div class="both">
                <div class="formElement">
                    <input type="text" name="age" id="age" autocomplete="on" required>
                    <label for="age" class="labelName"><span class="contentName">Age</span></label>
                </div>
                <div class="radioGroup">
                    <h4>Gender</h4>
                    <input type="radio" value="male" name="gender" required>
                    <label for="pass" class="labelName"><span class="contentName">Male</span></label>
                    <input type="radio" value="female" name="gender" required>
                    <label for="pass" class="labelName"><span class="contentName">Female</span></label>
                </div>
            </div>

            <div class="both">

                <div class="formElement">
                    <input type="text" name="card" id="card" autocomplete="on" required>
                    <label for="card" class="labelName"><span class="contentName">Card Number</span></label>
                </div>
                <div class="formElement">
                    <input type="number" name="fee" id="fee" autocomplete="on" required>
                    <label for="fee" class="labelName"><span class="contentName">Fee</span></label>
                </div>
            </div>
            <div class="formElement">
                <input type="number" name="phone" id="phone" autocomplete="on" required>
                <label for="phone" class="labelName"><span class="contentName">Phone Number</span></label>
            </div>
            <div>
                <input type="submit" value="Register" class="btn" name="Register">
            </div>

        </form>
    </div>
</body>

</html>