<?php
include 'header.php';

$idReturn = $_GET['id'];
$sqlEmpleadoEdit = "SELECT * FROM emp
WHERE idEmp = '$idReturn'";
$resultEmpleado = $connect->query($sqlEmpleadoEdit);
$rowEmpleado = $resultEmpleado->fetch_all(MYSQLI_ASSOC);
?>
<div class="container-fluid">
    <div class="row" id="rowHome"></div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <?php foreach ($rowEmpleado as $emp) { ?>
                        <form class="row g-3 login-form" method="POST" action="./emp/deleteEmp.php">
                            <div class="col-md-12">
                                <br>
                                <h4 style="text-align: center;">
                                    Eliminar empleado
                                </h4>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtNombre" value="<?php echo $emp['nombre']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtApellidos" value="<?php echo $emp['apellidos']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtCorreo" value="<?php echo $emp['correo']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtPassword" value="<?php echo $emp['passwordd']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtTelefono" value="<?php echo $emp['telefono']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtPuesto" value="<?php echo $emp['puesto']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtEdad" value="<?php echo $emp['edad']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" readonly required class="form-control" name="txtSexo" value="<?php echo $emp['sexo']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input required readonly type="text" name="txtSueldo" class="form-control" value="<?php echo $emp['sueldo']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input required readonly type="text" name="txtFechaIngreso" class="form-control" value="<?php echo $emp['fechaIngreso']; ?>">
                            </div>
                            <div class="col-md-12">
                                <input required readonly type="number" name="idEmp" hidden value="<?php echo $idReturn; ?>">
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6" align="center">
                                <button name="btnDelete" type="submit" class="btn btn-success submit">
                                    Eliminar
                                </button>
                                <a href="inicio.php" style="text-decoration: none;">
                                    <button id="btnExit" type="button" class="btn btn-danger">
                                        Cancelar
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-3"></div>
                            <br>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include 'footer.php';
?>