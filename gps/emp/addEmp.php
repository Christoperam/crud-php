<?php
#Base de datos
include '../db.php';


include '../header.php';
#Insert en la base de datos
if (isset($_POST['btnAddEmpleado'])) {
    $userId =  $row['idEmp'];
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
    $sqlEmpleado = "SELECT * FROM emp WHERE nombre = '$nombre'";
    $resultEmpleado = $connect->query($sqlEmpleado);
    $filas = $resultEmpleado->num_rows;
    if ($filas > 0) {
        header('Location: ../inicio.php?status=already-register');
    } else {

        $sqlEmpleadoInsert = "INSERT into emp(idEmp, nombre, apellidos, correo, telefono, puesto, edad, sexo, sueldo, fechaIngreso, passwordd) 
                            VALUES('$userId','$nombre','$apellido','$correo', '$tel', '$puesto', '$edad', '$sexo', '$sueldo', '$fecha', '$pass')";
        $resultEmpleadoInsert = $connect->query($sqlEmpleadoInsert);
        if ($resultEmpleadoInsert > 0) {
            header('Location: ../inicio.php?status=success-add');
        } else {
            header('Location: ../inicio.php?status=error-add');
        }
    }
}
?>