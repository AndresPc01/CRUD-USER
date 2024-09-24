<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$sql = mysqli_query($conexion, "SELECT `IDPerfil`, `nombre_perfil` FROM `perfil`") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="public/css/ActualizarProductos.css">
</head>

<body>
    <?php include '../Navbar.php'; ?>
    <div class="container">
        <form method="post" action="AgregarUrLog">
            <div class="container-form">
                <h1>Agregar Usuario</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Usuario</label>
                            <div class="input-group" style="">
                                <input type="text" name="usuario" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Contraseña</label>
                            <div class="input-group" style="margin-left:-5px;">

                                <input type="text" name="contraseña" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputPassword4">Tipo de Usuario</label>
                            <select name="idperfilfk" class="form-select form-select-lg mb-1">
                                <option selected>Selecciona</option>
                                <?php

                                while ($fila = mysqli_fetch_array($sql)) { ?>
                                    <option>
                                        <?php echo $fila['nombre_perfil']; ?>
                                    </option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mt-5">

                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-4" value="Guardar Cliente">
                <a type="button" class="btn btn-secondary" href="./Usuarios.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>