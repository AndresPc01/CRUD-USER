<?php
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
$idproveedor = $_REQUEST["idproveedor"];
$nombre_proveedor = $_REQUEST["nombre_proveedor"]; 
$telefono_proveedor = $_REQUEST["telefono_proveedor"]; 
$ciudad_proveedor = $_REQUEST["ciudad_proveedor"]; 

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar user</title>
    <?php include '../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../Services/EliminarProductoLogica.php">
            <div class="container-form">
                <h1>Eliminar Proveedor</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre Proveedor</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    value="<?php echo $idproducto; ?>" name="idproducto" />
                                <input type="text" readonly name="nombre_producto" class="form-control"
                                    value=<?php echo $nombre_producto; ?>>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Telefono</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">En Stock</span>
                                <input type="text" name="cantidad" readonly class="form-control"
                                    value=<?php echo $cantidad; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Ciudad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">COP</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    value="$" />
                                <input type="text" name="precio_unidad" readonly class="form-control"
                                    value=<?php echo $precio_unidad; ?>>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn btn-danger mt-5" value="Confirmar Eliminacion">
                <a type="button" class="btn btn-secondary" href="./Productos.php">Volver</a>
            </div>

        </form>

    </div>

</body>

</html>