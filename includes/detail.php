<?php

  require("config.php");
  global $id;
  
            


?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/viewPatient.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>View Patient</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="../img/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="../view_patient.php">patient List</a></li>
            <li class="active"><a href="../patient_hty.php">Patient History</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="../img/logo2.png" alt="logo">
        </div>
        <div class="content">
        <?php

 
    echo " <table class='table'>
            <thead>
                
            </thead>";
            $id=$_REQUEST['id'];   

              $sql = "SELECT  * FROM patient WHERE idP='$id'";
              
              
              $result = $con->query($sql);
             
               echo " <table class='table'>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Card No</th>
                <th>Date</th>
                <th>Card Fee</th>
                <th>Admission Fee</th>
                <th>Pharmacy Fee</th>
                <th>Labratory Fee</th>
                <th>Total Fee</th>
                <th>Detail</th>
            </thead>";
         

    //     if ($result->num_rows >0) {
    //  $row = $result->fetch_assoc(); 
    //     echo "<tbody>
    //     <tr>
    //             <td data-label='name'>Card No</td>
    //             <td data-label='name'>" . $row["card_no"]. "</td>
    //           </tr>
    //             <tr>
    //             <td data-label='name'>Full Name</td>
    //             <td data-label='name'>" . $row["fnameP"]. "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'>Age</td>
    //             <td data-label='age'> " . $row["ageP"]. " </td>
    //           </tr>

    //           <tr>
    //             <td data-label='name'>Gender</td>
    //             <td data-label='name'>" . $row["sex"]. "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'>Date</td>
    //             <td data-label='name'>" . date("Y/m/d") . "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'>card fee</td>
    //             <td data-label='name'>" . $row["card fee"]. "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'>Admission</td>
    //             <td data-label='name'>" . $row["admission"]. "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'>Labratory</td>
    //             <td data-label='name'>" . $row["labP"]. "</td>
    //           </tr>
    //           <tr>
    //             <td data-label='name'><a href='../view_patient.php'>Back Ptient List</a></td>
    //             <td data-label='name'><a herf='../add new '>Add New History</a></td>
    //           </tr>";




    // }
    
 
    //   echo "</table>";
while($row = $result->fetch_assoc() ) {
 
    
        $id=$row['idP'];
        $carn=$row['card_no'];
        $sql1 = "SELECT  * FROM daily_record WHERE card_no = '$carn'";
        echo $sql1;
         $re = $con->query($sql1);

       
        echo "<tbody>
                <tr>
                <td data-label='id'>" . $row["idP"]. "</td>
                <td data-label='name'>" . $row["fnameP"]. "</td>
                
                <td data-label='age'> " . $row["ageP"]. " </td>
              <td data-label='card_no'> " . $row["card_no"]. " </td>
              <td data-label='date'>".date("Y/m/d")."</td>";
          }
    while ( $ro = $re->fetch_assoc()) {
       
     echo  "
 
              <td data-label='fee1'> " . $ro["cardf"]. " </td>
              <td data-label='fee2'>".$ro["admf"]."</td>
              <td data-label='fee3'> " .  "string". " </td>
              <td data-label='fee4'>".$ro["labf"]."</td>
              

              <td><a href='includes/detail.php?id= ". $row['idP']." '>Detail</a></td>

              

              </tr>";

    }
    

      echo "</table>";

    

    

?>
   <table class='table'>
        <tbody>
            
            <tr>
            <td data-label='name'><a href='../view_patient.php'>Back Ptient List</a></td>
            <td data-label='name'><a herf='../add new '>Add New History</a></td>           
            </tr>
            
        </tbody>
    </table>    

    
</html>