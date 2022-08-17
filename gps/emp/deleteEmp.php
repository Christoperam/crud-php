<?php
include '../db.php';
include '../header.php';

if (isset($_POST['btnDelete']))
{
    $id = mysqli_real_escape_string($connect, $_POST['idEmp']);
    
    $sqlEmpleadoDelete = "DELETE FROM emp WHERE idEmp = $id";
    $resultEmpleadoDelete = $connect -> query($sqlEmpleadoDelete);
    if ($resultEmpleadoDelete > 0)
    {
        header('Location: ../inicio.php?status=success-delete');
    }
    else
    {
        header('Location: ../inicio.php?status=error-delete');
    }
}
?>