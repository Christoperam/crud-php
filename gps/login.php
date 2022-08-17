<?php
session_start();
include 'db.php';

if(!empty($_POST)){
    $username = mysqli_real_escape_string($connect, $_POST['txtEmail']); 
    $password = mysqli_real_escape_string($connect, $_POST['txtPassword']);
    $sql = "SELECT id FROM users WHERE email = '$username' AND passwordd = '$password'";
    $result = $connect -> query($sql);
    $rows = $result -> num_rows;
    $row = $result -> fetch_assoc();

    $sql2 = "SELECT idEmp FROM emp WHERE correo = '$username' AND passwordd = '$password'";
    $result2 = $connect -> query($sql2);
    $rows2 = $result2 -> num_rows;
    $row2 = $result2 -> fetch_assoc();

    switch($row['id'] || $row2['idEmp']){
        case 1:
            header('location: inicio.php');
            break;
        default:
            header('location: index.php');
        }
    
    if($rows > 0 || $rows2 > 0){
        
        $_SESSION['id_user'] = $row['id'] || $row2['idEmp'];
        #header("Location: home.php");
    }else{
        header('Location: index.php?status=1');
    }
}
?>