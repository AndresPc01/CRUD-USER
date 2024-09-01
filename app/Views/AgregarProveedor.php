<?php
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Proveedor</title>
    <?php include '../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../Services/AgregarProductoLogica.php">
            <div class="container-form">
                <h1>Agregar Proveedor</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre Proveedor</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    name="idproducto" />
                                <input type="text" name="nombre_proveedor" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">telefono</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">+57</span>
                                <input type="text" name="telefono_proveedor" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Ciudad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <input type="text" name="ciudad_proveedor" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success mt-5" value="Guardar">
                <a type="button" class="btn btn-secondary" href="./Proveedor.php">Volver</a>
            </div>
        </form>
    </div>
</body>

</html>