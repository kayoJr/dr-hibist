<?php

require 'config.php';
global $con;

if(isset($_POST['search'])){

	$searchq = $_POST['search'];
	//$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

	$sqls="SELECT * FROM patient WHERE fnameP LIKE '$searchq' OR telP LIKE '$searchq"; 
  $re = $con->query($sqls);
  
	$count = mysqli_num_rows($re);
  printf("Result set has %d rows.\n",$count);
	if ($count ==0) {
		echo "no match";
	}else{
 
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
      
     while($row = mysql_fetch_array($sqls)) {
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

    
	}


?>