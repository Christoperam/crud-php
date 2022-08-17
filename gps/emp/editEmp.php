<?php 
include '../db.php';
session_start();

#Valida si existe la sesion
if (!isset($_SESSION['id_user'])) {
    header("Location: index.php");
}

if (isset($_POST['btnEdit'])) { 
    $subjectId = mysqli_real_escape_string($connect, $_POST['idEmp']);
    $nombre = mysqli_real_escape_string($connect, $_POST['txtNombre']);
    $apellido = mysqli_real_escape_string($connect, $_POST['txtApellidos']);
    $correo = mysqli_real_escape_string($connect, $_POST['txtCorreo']);
    $tel = mysqli_real_escape_string($connect, $_POST['txtTelefono']);
    $puesto = mysqli_real_escape_string($connect, $_POST['txtPuesto']);
    $edad = mysqli_real_escape_string($connect, $_POST['txtEdad']);
    $sexo = mysqli_real_escape_string($connect, $_POST['txtSexo']);
    $sueldo = mysqli_real_escape_string($connect, $_POST['txtSueldo']);
    $fecha = mysqli_real_escape_string($connect, $_POST['txtFechaIngreso']);
    $pass = mysqli_real_escape_string($connect, $_POST['txtPassword']);
    $sqlSubject = "UPDATE emp SET nombre = '$nombre', apellidos = '$apellido', correo = '$correo', telefono = '$tel', puesto = '$puesto', edad = '$edad', sexo = '$sexo', sueldo = '$sueldo', fechaIngreso = '$fecha', passwordd = '$pass'
                    WHERE idEmp = '$subjectId'"; 
    $resultSubject = $connect -> query($sqlSubject);
    header('Location: ../inicio.php?status=success-edit');
}
?>