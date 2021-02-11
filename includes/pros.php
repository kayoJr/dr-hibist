 <?php
require 'config.php';

function total(){

 $tot;
global $con;


	$tot =0;
$sql1="SELECT idD FROM `drug` ";
$re = $con->query($sql1);
$co = mysqli_num_rows($re);
$co =$co +1;
 for ($id=1; $id < $co; $id++) { 

$sql="SELECT * FROM `drug` where idD='$id'  ";

if ($result=mysqli_query($con,$sql)){

$row=mysqli_fetch_array($result,MYSQLI_NUM);
$var=$row[2];
$tot= $tot+$var;

mysqli_free_result($result);

}}
echo $tot;
}

function tot_p(){
 $tot;
global $con;


	$tot =0;
$sql1="SELECT idP FROM `patient` ";
$re = $con->query($sql1);
$co = mysqli_num_rows($re);
$co =$co +1;
 for ($id=1; $id < $co; $id++) { 

$sql="SELECT * FROM `patient` where idD='$id'  ";

if ($result=mysqli_query($con,$sql)){

$row=mysqli_fetch_array($result,MYSQLI_NUM);
$var=$row[2];
$tot= $tot+$var;

mysqli_free_result($result);

}}
echo $tot;	
	
}
// total();
?>