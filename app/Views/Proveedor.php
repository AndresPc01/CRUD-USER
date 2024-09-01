<?php
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php'
$sql = mysqli_query($conexion , "SELECT `idproveedor`, `nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor` FROM `proveedor` ")or 
die("Problemas en el select : " .mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROVEEDORES</title>
    <?php include '../../public/css/Plugins.php' ?>
</head>

<body>
    <?php include '../../resources/views/Navbar.php'; ?>
    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12 d-flex text-center justify-content-center">
                <div class="d-flex align-items-center" style=" float:left;">
                    <h1 class=" text-center p-3">
                        CRUD DE PROVEEDORES
                    </h1>
                </div>
                <div class="d-flex align-items-center" style="margin-left:35px;">
                    <a href="./AgregarProveedor.php" class=" btn btn-info ">Agregar Nuevo Cliente</a>
                </div>

            </div>

            <div class=" row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Proveedor</th>
                                <th>telefono </th>
                                <th>ciudad</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <?php
                    while($fila = mysqli_fetch_array($sql)){
 ?>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['idproveedor']; ?></td>
                                <td><?php echo $fila['nombre_proveedor']; ?></td>
                                <td><?php echo $fila['telefono_proveedor']; ?></td>
                                <td><?php echo $fila['ciudad_proveedor']; ?></td>
                                <td><a href="./ActualizarProveedor.php?idproveedor=<?php echo $fila['idproveedor'] ?>&nombre_proveedor=<?php echo $fila['nombre_proveedor'] ?>&telefono_proveedor=<?php echo $fila['telefono_proveedor'] ?>&ciudad_proveedor=<?php echo $fila['ciudad_proveedor']?>"
                                        class="btn btn-primary">Actualizar</a></td>
                                <td><a href="./EliminarProveedor.php?idproveedor=<?php echo $fila['idproveedor'] ?>&nombre_proveedor=<?php echo $fila['nombre_proveedor'] ?>&telefono_proveedor=<?php echo $fila['telefono_proveedor'] ?>&ciudad_proveedor=<?php echo $fila['ciudad_proveedor']?>"
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