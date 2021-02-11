<?php require 'includes/auth.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/viewPatient.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>View Patient</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li class="active"><a href="admin_rec.php">Reception</a></li>
            <li><a href="admin_phar.php">Pharmacy</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
        <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="includes/search.php" method="post">
        <div class="formElement">
            <input type="search" name="search" id="search">
            <label for="search">Search</label>
        </div>
    </form>
       
<?php

  require("includes/config.php");

  $sql = "SELECT  * FROM patient";
 $result = $con->query($sql);
 
 
    echo " <table class='table'>
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Card No</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Detail</th>
            </thead>";
        if ($result->num_rows >0) {
     while($row = $result->fetch_assoc()) {
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["fnameP"]. "</td>
                
                <td data-label='age'> " . $row["ageP"]. " </td>
             <td data-label='sex'> " . $row["sex"]. " </td>
              <td data-label='mark'> " . $row["card_no"]. " </td> 
              <td data-label='status'> " . $row["telP"]. " </td>  
              <td data-label='status'>".$row["date_reg"]."</td>
              <td><a href='includes/detail.php'>Detail</a></td>
              

              </tr>";

    }
    
} 
      echo "</table>";

    

?>
        
    </div>
</body>
</html>