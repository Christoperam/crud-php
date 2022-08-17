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
                    <?php foreach($rowEmpleado as $emp) {?>
                    <form class="row g-3 login-form" method="POST" action="./emp/editEmp.php">
                        <div class="col-md-12">
                            <br>
                            <h4 style="text-align: center;">
                                Actualizar empleado
                            </h4>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control"  name="txtNombre" value="<?php echo $emp['nombre']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control"  name="txtApellidos" value="<?php echo $emp['apellidos']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control"  name="txtCorreo" value="<?php echo $emp['correo']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" name="txtPassword" value="<?php echo $emp['passwordd']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control"  name="txtTelefono" value="<?php echo $emp['telefono']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control"  name="txtPuesto" value="<?php echo $emp['puesto']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" name="txtEdad" value="<?php echo $emp['edad']; ?>">
                        </div>
                        <div class="col-md-6">
                            <select required name="txtSexo" class="form-select">
                                <option selected disabled>Seleccionar sexo</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="txtSueldo" class="form-control" value="<?php echo $emp['sueldo']; ?>">
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="txtFechaIngreso" class="form-control" value="<?php echo $emp['fechaIngreso']; ?>">
                        </div>
                        <div class="col-md-12">
                            <input required type="number" name="idEmp" hidden value="<?php echo $idReturn; ?>">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8" align="center">
                            <button name="btnEdit" type="submit" class="btn btn-success submit">
                                Actualizar
                            </button>
                            <a href="inicio.php" style="text-decoration: none;">
                                <button id="btnExit" type="button" class="btn btn-danger">
                                    Cancelar
                                </button>
                            </a>
                        </div>
                        <div class="col-md-2"></div>
                        <br>
                    </form>
                    <?php } ?>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include 'footer.php';
?>