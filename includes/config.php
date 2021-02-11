<?php 

global $con;
$con = mysqli_connect('localhost','root','','dr_hibist');

if (!$con) {
	die("Filed to connect to MYSQL" . $con->connect_error);
}
// define('USER', 'root');
// define('PASSWORD','');
// define('HOST','localhosst');
// define('DATABASE','dr_hibist');

// try{
// 	$con = new PDO("mysql:host=".HOST.";dbname=".DATABASE,USER,PASSWORD);
// }catch (PDOException $e){
// 	exit("Error:" . $e->getmessage());
// }


// if(!isset($_POST['uname'],$_POST['pass'])){

// 	exit('please fill both boxs');
// }

 ?>