<?php  

include('config.php');
global $con;

$firstname=$_POST['name'];
//$lastname=$_POST['lname'];
$age=$_POST['age'];
$sex=$_POST['gender'];
$card=$_POST['card'];
$tel=$_POST['phone'];
$date=date("Y/m/d");

$sql="INSERT INTO patient (fnameP,sex ,ageP,card_no,telP,date_reg )  VALUES ('$firstname','$sex' ,'$age','$card','$tel','$date')";

if (mysqli_query($con, $sql)) {
    header("Location:../view_patient.php") ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>