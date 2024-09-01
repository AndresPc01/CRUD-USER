<?php 
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
include '../../public/css/Plugins.php';
$sql=mysqli_query($conexion, "SELECT `idproducto`, `nombre_producto`, `cantidad`, `precio_unidad`, `idproveedorfk` FROM `producto`") or
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
            <div class="col-md-12  d-flex text-center justify-content-center">
                <h1 class=" text-center p-3">
                    PRODUCTOS
                </h1>
                <div class="d-flex align-items-center" style="margin-left:35px;">
                    <a href="./AgregarProducto.php" class=" btn btn-info ">Agregar Nuevo Producto</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Unidad</th>
                                <th>ID Proveedor</th>
                                <th>Nombre Proveedor</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <?php
              
                    while($fila = mysqli_fetch_array($sql)){
                        $var = $fila['idproveedorfk'];
                        $res  =mysqli_query($conexion,"SELECT `nombre_proveedor`FROM `proveedor` WHERE `idproveedor`='$var'");
                        $row = mysqli_fetch_array($res);
                    
 ?>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['idproducto']; ?></td>
                                <td><?php echo $fila['nombre_producto']; ?></td>
                                <td><?php echo $fila['cantidad']; ?></td>
                                <td><?php echo "$ ".$fila['precio_unidad']." COP"; ?></td>
                                <td><?php echo $fila['idproveedorfk']; ?></td>
                                <td><?php echo $row['nombre_proveedor']; ?></td>
                                <td><a href="./ActualizarProducto.php?idproducto=<?php echo $fila['idproducto'] ?>&nombre_producto=<?php echo $fila['nombre_producto'] ?>&cantidad=<?php echo $fila['cantidad'] ?>&precio_unidad=<?php echo $fila['precio_unidad']?>&idproveedorfk=<?php echo $fila['idproveedorfk']?> "
                                        class="btn btn-primary">Actualizar</a></td>
                                <td><a href="./EliminarProducto.php?idproducto=<?php echo $fila['idproducto'] ?>&nombre_producto=<?php echo $fila['nombre_producto'] ?>&cantidad=<?php echo $fila['cantidad'] ?>&precio_unidad=<?php echo $fila['precio_unidad']?>&idproveedorfk=<?php echo $fila['idproveedorfk']?> "
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