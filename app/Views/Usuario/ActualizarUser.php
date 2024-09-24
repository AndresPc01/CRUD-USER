<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$idusuario = $_REQUEST["idusuario"];
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];
$nombre = $_REQUEST["nombre"];
$nombre_perfil = $_REQUEST["nombre_perfil"];

$sql = mysqli_query($conexion, "SELECT `IDPerfil`, `nombre_perfil` FROM `perfil`") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar user</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="public/css/ActualizarUser.css">
</head>

<body>

    <div class="container">
        <form method="post" action="ActualizarUrLog">
            <div class="container-form">
                <h1>Actualizar Datos </h1>

                <div>
                    <label for="nombre">Nombre</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">ID</span>
                        <input readonly class="input-group-text" style="width:50px; text-align: end;"
                            value="<?php echo $idusuario; ?>" name="idusuario" />
                        <input type="text" name="nombre" class="form-control" value=<?php echo $nombre; ?>>
                    </div>
                    <div>
                    </div>

                    <div>
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" value=<?php echo $usuario; ?>>
                    </div>
                    <div>
                        <label for="contraseña">Contraseña (cifrada)</label>
                        <input type="password" name="contraseña" class="form-control" value=<?php echo $contraseña; ?>>
                    </div>
                    <div>
                        <label for="usuario">Tipo de Usuario</label>
                        <select name="idperfilfk" class="form-select form-select-lg " style="font-size:1rem;">
                            <option selected><?php echo $nombre_perfil; ?></option>
                            <?php
                            while ($fila = mysqli_fetch_array($sql)) {
                                ?>
                                <option>
                                    <?php
                                    echo $fila['nombre_perfil'];
                                    ?>
                                </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Guardar">
                <a type="button" class="btn btn-secondary" href="Usuarios">Volver</a>
            </div>

        </form>

    </div>
</body>

</html>