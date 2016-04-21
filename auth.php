<?php
include_once 'func.php';




$username=$_POST['username'];
$password=$_POST['password'];



if($logins=='false') {
    echo "<script>function redirect(){location='../index.html';} document.write('fault user or passowrd !<br>redirect for 3 seconds later');setTimeout('redirect()',3000);</script>";

}else{

$_SESSION['Username']=$username;
$_SESSION['LOGIN_STATUS']='login';
header("location: ../app/main.php");
}
