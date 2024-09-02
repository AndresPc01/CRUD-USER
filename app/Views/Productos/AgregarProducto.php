<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$sql = mysqli_query($conexion, "SELECT `idproveedor`, `nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor`, `estado_proveedor` FROM `proveedor`") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../../public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../../Services/Productos/AgregarProductoLogica.php">
            <div class="container-form">
                <h1>Agregar Producto</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre Producto</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    name="idproducto" />
                                <input type="text" name="nombre_producto" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cantidad</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">En Stock</span>
                                <input type="number" name="cantidad" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Precio Unidad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">COP</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;" value="$"
                                    name="idproducto" />
                                <input type="number" name="precio_unidad" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputPassword4">Proveedor</label>
                            <select name="idproveedorfk" class="form-select form-select-lg mb-1">
                                <option selected>Selecciona</option>
                                <?php

                                while ($fila = mysqli_fetch_array($sql)) {
                                    if ($fila['estado_proveedor'] === '1') {
                                        ?>
                                <option>
                                    <?php echo $fila['nombre_proveedor']; ?>
                                </option>
                                <?php }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="inputPassword4">Seleccione Estado de Producto</label>
                            <select name="estado_producto" class="form-select form-select-lg mb-1">
                                <option selected>Selecciona</option>
                                <option>Habilitado</option>
                                <option>Desabilitado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success mt-5" value="Guardar">
                <a type="button" class="btn btn-secondary" href="./Productos.php">Volver</a>
            </div>
        </form>
    </div>
</body>

</html>