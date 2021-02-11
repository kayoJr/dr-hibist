<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/viewPatient.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>View Patient</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <!-- <li class="active"><a href="includes/detail.php">Patient Detail</a></li> -->
            <li><a href="patient_hty.php">Patient History</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <div class="formElement">
            <input type="search" name="search" id="search">
            <label for="search">Search</label>
        </div>
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Card No</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Detail</th>
            </thead>
            <tbody>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                    <td data-label="name">kayo</td>
                    <td data-label="age">22</td>
                    <td data-label="sex">male</td>
                    <td data-label="mark">90</td>
                    <td data-label="status">pass</td>
                    <td data-label="status">pass</td>
                    <td><a href="#">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>