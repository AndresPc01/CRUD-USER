<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
$idcliente = $_REQUEST["idcliente"];
$identidad = $_REQUEST["identidad"];
$nombre = $_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$direccion = $_REQUEST["direccion"];
$estado_cliente = $_REQUEST["estado_cliente"];
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <?php include '../../../public/css/Plugins.php' ?>

    <link rel="stylesheet" href="public/css/ActualizarProductos.css">
</head>

<body>
    <div class="container">
        <form method="post" action="ActualizarCLog">
            <div class="container-form">
                <h1>Actualizar Cliente</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Identidad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text" style="margin-left:-5px; ">ID</span>
                                <input readonly name="idcliente" class="input-group-text"
                                    style="width:35px;   text-align:end;" value="<?php echo $idcliente; ?>" />
                                <span class="input-group-text">CC</span>
                                <input type="text" name="identidad" value="<?php echo $identidad; ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nombre</label>
                            <div class="input-group" style="">
                                <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Telefono</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">+57</span>
                                <input type="text" name="telefono" value="<?php echo $telefono; ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputPassword4">Direccion</label>
                            <div class="input-group" style="">
                                <input type="text" name="direccion" value="<?php echo $direccion; ?>"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Estado Cliente</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <input type="text" name="estado_cliente" value="<?php echo $estado_cliente; ?>"
                                    class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-4" value="Guardar ">
                <a type="button" class="btn btn-secondary" href="./Clientes.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>