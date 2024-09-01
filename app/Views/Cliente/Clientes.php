<?php 
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
include '../../public/css/Plugins.php';
$sql=mysqli_query($conexion, "SELECT `idcliente`, `identidad`, `nombre`, `telefono`, `direccion` FROM `cliente`") or
die("Problemas en el select:" . mysqli_error($conexion));

?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
</head>

<body>
    <?php include '../../resources/views/Navbar.php'; ?>

    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12 d-flex text-center justify-content-center">
                <div class="d-flex align-items-center" style=" float:left;">
                    <h1 class=" text-center p-3">
                        CRUD DE CLIENTES
                    </h1>
                </div>
                <div class="d-flex align-items-center" style="margin-left:35px;">
                    <a href="./AgregarCliente.php" class=" btn btn-info ">Agregar Nuevo Cliente</a>
                </div>

            </div>

            <div class=" row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Identidad</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <?php
                    while($fila = mysqli_fetch_array($sql)){
 ?>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['idcliente']; ?></td>
                                <td><?php echo $fila['identidad']; ?></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><?php echo $fila['telefono']; ?></td>
                                <td><?php echo $fila['direccion']; ?></td>
                                <td><a href="./ActualizarCliente.php?idcliente=<?php echo $fila['idcliente'] ?>&identidad=<?php echo $fila['identidad'] ?>&telefono=<?php echo $fila['telefono'] ?>&nombre=<?php echo $fila['nombre']?>&direccion=<?php echo $fila['direccion']?> "
                                        class="btn btn-primary">Actualizar</a></td>
                                <td><a href="./EliminarCliente.php?idcliente=<?php echo $fila['idcliente'] ?>&identidad=<?php echo $fila['identidad'] ?>&telefono=<?php echo $fila['telefono'] ?>&nombre=<?php echo $fila['nombre']?>&direccion=<?php echo $fila['direccion']?> "
                                        class="btn btn-primary">Eliminar</a></td>
                            <tr>
                        </tbody>
                        <?php       
 }
?>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>