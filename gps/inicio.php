<?php
include 'header.php';
include 'db.php';
?>
<?php
$idUser = $_SESSION['id_user'];
$sql = "SELECT * FROM emp ";

$result = $connect->query($sql);
$row = $result->fetch_assoc();

$sqlEmp = "SELECT * FROM emp";
$resultEmp = $connect->query($sqlEmp);
$rowEmp = $resultEmp->fetch_all(MYSQLI_ASSOC);
?>
<div id="contenedor" class="container-fluid" oncontextmenu="return false">
    <div class="container-fluid">
        <div class="row" id="rowHome">
            <?php
            error_reporting(0);
            $status = $_GET["status"];
            if ($status == 'success-edit') {
                echo (' <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: center">
			                <h4>¡Actualización exitosa!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            if ($status == 'success-add') {
                echo (' <div class="alert alert-success alert-dismissible fade show" role="alert">
			                <h4>¡Registro exitoso!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            if ($status == 'success-delete') {
                echo (' <div class="alert alert-success alert-dismissible fade show" role="alert">
			                <h4>¡Eliminación exitosa!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            if ($status == 'already-registrer') {
                echo (' <div class="alert alert-warning alert-dismissible fade show" role="alert">
			                <h4>¡Ya ha sido registrado el empleado!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            if ($status == 'error-add') {
                echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                <h4>¡Error al registrar!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            if ($status == 'error-delete') {
                echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                <h4>¡Error al eliminar!</h4>
			                <a class="close">
			                    <span aria-hidden="true">
                                    <i style="font-size: 27px;" class="icon ion-md-close close mr-4 lead" data-dismiss="alert"></i>
                                </span>
                            </a>
		                </div> ');
            }
            ?>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <a href="add.php">
                    <button type="button" id="btnAdd" class="btn btn-outline-success">
                        Agregar
                    </button>
                </a>
            </div>
            <div class="col-sm-11"></div>
        </div>
        <br>
        <div class="row" id="tableEmp">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover" oncontextmenu="return false">
                    <thead class="table-dark" id="tHead">
                        <tr style="text-align: center;">
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Tel&eacute;fono</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Sueldo</th>
                            <th scope="col">Fecha de ingreso</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <?php foreach ($rowEmp as $emp) { ?>
                        <tbody class="table-group-divider">
                            <tr style="text-align: center;">
                                <td><?php echo $emp['nombre']; ?></td>
                                <td><?php echo $emp['apellidos']; ?></td>
                                <td><?php echo $emp['correo']; ?></td>
                                <td><?php echo $emp['passwordd'] ?></td>
                                <td><?php echo $emp['telefono']; ?></td>
                                <td><?php echo $emp['puesto']; ?></td>
                                <td><?php echo $emp['edad']; ?></td>
                                <td><?php echo $emp['sexo']; ?></td>
                                <td><?php echo $emp['sueldo']; ?></td>
                                <td><?php echo $emp['fechaIngreso']; ?></td>
                                <td style="text-align: center;">
                                    <div class="btn-group" role="group">
                                        <a style="text-decoration: none;" href="edit.php?id=<?php echo $emp['idEmp']; ?>">
                                            <button id="btnEdit" class="btn">
                                                <i id="edit-icon" class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                        <a style="text-decoration: none;" href="delete.php?id=<?php echo $emp['idEmp']; ?>">
                                            <button id="btnDelete" class="btn">
                                                <i id="delete-icon" class="fa-solid fa-trash"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>