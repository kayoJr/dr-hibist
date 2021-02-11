<?php

require 'config.php';
session_start();

// //login('admin');
// login('pharmasist');
// login('reception');
// login('pharmasist');

// function login($pos){
global $con;
if (isset($_POST['uname'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE fnameU='$username' AND passwordU='$password'";
    //echo $sql;
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $username;
        $ro = "SELECT positionU FROM `users` WHERE fnameU='$username' AND passwordU='$password'";
        $s = $con->query($sql);
        while ($row = $s->fetch_assoc()) {
            echo $row["positionU"];
            //echo $s;

            if ($row["positionU"] === 'admin') {

                header('Location:../admin.php?');

            } elseif ($row["positionU"] === 'pharmasist') {

                header('Location:../pharmacy.php?');

            } elseif ($row["positionU"] === 'reception') {

                header('Location:../reception.php?');

            } else {
                header('Location:../index.php?msg=Unknown User');
            }
        }

    } else {

        header('Location:../index.php?msg=Invalid User and Password.');

    }
}

// if (isset($_POST['uname'])){
// echo "miki";
//     $username =$_POST['uname'];
//     $password =$_POST['pass'];

//     $sql = $con->prepare("SELECT *FROM users WHERE fnameU= '$username'");
//     // $sql->blind_param("fnameU",$username,PDO::PARAM_STR);
//     $sql->excute();

//     $rs =$sql->fetch(PDO::FETCH_ASSOC);

//     IF(!$rs){
//         echo '<p class="error">username and password is wrong</p>';
//     }else{
//         if(password_verify($password, $rs[$password])){
//             $_SESSION['userid'] =$rs['id'];
//             header("Location:admin.html?success ");
//         }
//     }
// }
