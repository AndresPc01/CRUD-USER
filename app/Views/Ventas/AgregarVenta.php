<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$sql=mysqli_query($conexion, "SELECT `idproveedor`, `nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor` FROM `proveedor`") or
die("Problemas en el select:" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <?php include "procesoPHP/plugins.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="public/css/ActualizarProductos.css">
</head>

<body>

    <?php include '../Navbar.php'; ?>

    <div class="container">
        <form method="POST" action="RegistrarVenta">
            <div class="container-form">
                <h1>Agregar Venta</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <input type="text" name="nombre_producto" placeholder="nombre producto" class="form-control"
                                style="padding:15px;" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="cantidad" placeholder="cantidad" class="form-control"
                                style="padding:15px;" required>
                        </div>


                    </div>

                    <div class="input-group  mt-4">
                        <div class="form-group col-md-6">
                            <input type="text" name="precio_unidad" class="form-control fa fa-eye"
                                placeholder="precio unidad" style="padding:15px;" required>
                        </div>

                        <div class="form-group col-md-6">
                            <select name="idproveedor" class="form-select form-select-lg mb-1">
                                <option value="">Select</option>
                                <?php while($fila = mysqli_fetch_array($sql)){?>
                                <option><?php echo $fila['nombre_proveedor']; ?></option>
                                <?php }?>
                            </select>
                        </div>

                    </div>
                </div>




                <div class="mt-4 ">
                    <input type="submit" style="width:40vh;" class="btn btn-success" value="Agregar venta">
                </div>
        </form>

    </div>

</body>

</html>