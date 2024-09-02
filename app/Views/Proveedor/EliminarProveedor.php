<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$idproveedor = $_REQUEST["idproveedor"];
$nombre_proveedor = $_REQUEST["nombre_proveedor"]; 
$telefono_proveedor = $_REQUEST["telefono_proveedor"]; 
$ciudad_proveedor = $_REQUEST["ciudad_proveedor"]; 

$sql = mysqli_query($conexion,"SELECT COUNT(*)AS total FROM `producto` WHERE `idproveedorfk`=9;");

$count = 0;

while ($row = mysqli_fetch_assoc($sql)) {
    $count = $row["total"];    
}

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proveedor</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../../public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../../Services/Proveedores/EliminarProveedorLogica.php">
            <div class="container-form">
                <h1>Eliminar Proveedor</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre Proveedor</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    value="<?php echo $idproveedor; ?>" name="idproveedor" />
                                <input type="text" readonly class="form-control" value=<?php echo $nombre_proveedor; ?>>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Telefono</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">+57</span>
                                <input type="text" readonly class="form-control"
                                    value=<?php echo $telefono_proveedor; ?>>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mt-4 ">
                        <div class="form-group col-md-6 ">
                            <label for="">Ciudad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">Cdad</span>

                                <input type="text" readonly class="form-control" value=<?php echo $ciudad_proveedor; ?>>
                            </div>
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="">Productos Asociados</label>
                            <div class="input-group">
                                <span class="input-group-text">CANTIDAD</span>
                                <input type="text" readonly class="form-control" value=<?php echo $count; ?>>
                            </div>
                        </div>
                    </div>





                </div>

                <input type="submit" class="btn btn-danger mt-5" value="Confirmar Eliminacion">
                <a type="button" class="btn btn-secondary" href="./Proveedor.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>