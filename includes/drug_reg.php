<?php  

include('config.php');
global $con;

$firstname=$_POST['name'];
//$lastname=$_POST['lname'];
$cost=$_POST['cost'];
$qua=$_POST['qua'];
// $card=$_POST['card'];
// $tel=$_POST['phone'];
$date=date("Y/m/d");

$sql="INSERT INTO drug (nameD,cost,qua,dateD )  VALUES ('$firstname','$cost' ,'$qua',$date)";

if (mysqli_query($con, $sql)) {
    header("Location:../sell_history.php") ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>