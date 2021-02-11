<?php require 'includes/auth.php'; global $id;?>
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
            <li><a href="reception.php">Add Patient</a></li>
            <li class="active"><a href="view_patient.php">View Patient</a></li>
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
  
  $sql = "SELECT * FROM patient ORDER BY idP ";
 $result = $con->query($sql);
 
 
    echo " <table class='table'>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Card No</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Detail</th>
            </thead>";
        if ($result->num_rows >0) {
            $ro = $result->fetch_assoc();   
        $id = $ro["idP"];
        echo $id;
        
     while($row = $result->fetch_assoc()) {
        
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["idP"]. "</td>
                <td data-label='name'>" . $row["fnameP"]. "</td>
                
                <td data-label='age'> " . $row["ageP"]. " </td>
             <td data-label='sex'> " . $row["sex"]. " </td>
              <td data-label='mark'> " . $row["card_no"]. " </td> 
              <td data-label='status'> " . $row["telP"]. " </td>  
              <td data-label='status'>".$row["date_reg"]."</td>

              <td><a href='includes/detail.php?id=".$id." '>Detail</a></td>
              

              </tr>";

    }
    
} 
      echo "</table>";

    

?>
    
    </div>
</body>

</html>