<?php
include 'header.php';
include 'db.php';
?>
<div class="container-fluid">
    <div class="row" id="rowHome"></div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 login-form" method="POST" action="./emp/addEmp.php">
                        <div class="col-md-12">
                            <br>
                            <h4 style="text-align: center;">
                                Registro de empleado
                            </h4>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloLetras(event)" type="text" required class="form-control" name="txtNombre" placeholder="Nombre(s)">
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloLetras(event)" type="text" required class="form-control" name="txtApellidos" placeholder="Apellido(s)">
                        </div>
                        <div class="col-md-6">
                            <input type="email" required class="form-control" name="txtCorreo" placeholder="Correo electrónico">
                        </div>
                        <div class="col-md-6">
                            <input type="password" required class="form-control" name="txtPassword" placeholder="Contraseña">
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloNumeros(event)" type="text" required class="form-control" name="txtTelefono" placeholder="Numéro de teléfono">
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloLetras(event)" type="text" required class="form-control" name="txtPuesto" placeholder="Puesto de trabajo">
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloNumeros(event)" type="number" required class="form-control" name="txtEdad" placeholder="Edad">
                        </div>
                        <div class="col-md-6">
                            <!--<input type="text" id="txtSexo" name="txtSexo" placeholder="Sexo" class="form-control" required>-->
                            <select required name="txtSexo" class="form-select">
                                <option selected disabled>Seleccionar sexo</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input onkeypress="return soloNumeros(event)" required type="number" name="txtSueldo" class="form-control" placeholder="Sueldo del empleado">
                        </div>
                        <div class="col-md-6">
                            <input required type="date" name="txtFechaIngreso" class="form-control" placeholder="Fecha de ingreso">
                        </div>
                        <div class="col-sm-6"></div>
                        <br>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" align="center">
                                <button name="btnAddEmpleado" type="submit" class="btn btn-success submit">
                                    Guardar
                                </button>
                                <a href="inicio.php" style="text-decoration: none;">
                                    <button id="btnExit" type="button" class="btn btn-danger">
                                        Cancelar
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php
include 'footer.php';
?>