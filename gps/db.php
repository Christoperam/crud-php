<?php
//variables de acceso
$server = "localhost";
$user = "root"; 
$password = "";
$db = "gps";
$connect =  new mysqli($server, $user, $password, $db);
if(mysqli_connect_errno()){
   echo "NO CONECTADO " , mysqli_connect_error();
   exit();
}else{
   #echo "CONECTADO";
}
?>