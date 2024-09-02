<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
$idusuario = $_REQUEST["idusuario"];
$usuario = $_REQUEST["usuario"]; 
$contraseña = $_REQUEST["contraseña"]; 
$nombre = $_REQUEST["nombre"]; 
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar user</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../../public/css/ActualizarUser.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../Services/Usuario/EliminarUserLogica.php">
            <div class="container-form">
                <h1>Eliminar Datos </h1>

                <div>
                    <label for="nombre">Nombre</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">ID</span>
                        <input readonly class="input-group-text" style="width:35px; text-align: end;"
                            value="<?php echo $idusuario; ?>" name="idusuario" />
                        <input type="text" readonly name="nombre" class="form-control" value=<?php echo $nombre; ?>>
                    </div>
                    <div>
                    </div>
                    <div>
                        <label for="usuario">Usuario</label>
                        <input readonly type="text" name="usuario" class="form-control" value=<?php echo $usuario; ?>>
                    </div>
                    <div>
                        <label for="contraseña">Contraseña (cifrada)</label>
                        <input readonly type="password" name="contraseña" class="form-control"
                            value=<?php echo $contraseña; ?>>
                    </div>
                </div>


                <input type="submit" class="btn btn-danger" value="Confirmar Eliminacion">
                <a type="button" class="btn btn-secondary" href="./Usuarios.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>