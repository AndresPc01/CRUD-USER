<?php
session_start();
include '../../Controllers/ProtectDashboard.php'; ?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="AgregarCLog">
            <div class="container-form">
                <h1>Agregar Cliente</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Identidad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">CC</span>
                                <input type="text" maxlength="10" name="identidad" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nombre</label>
                            <div class="input-group" style="">
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Telefono</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">+57</span>
                                <input type="text" name="telefono" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputPassword4">Direccion</label>
                            <div class="input-group" style="">
                                <input type="text" name="direccion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-5">
                        <div class="form-group col-md-12 ">
                            <select class="form-select form-select-lg" name="estado_cliente">
                                <option>Habilitado</option>
                                <option>Desabilitado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-4" value="Guardar Cliente">
                <a type="button" class="btn btn-secondary" href="./Clientes.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>