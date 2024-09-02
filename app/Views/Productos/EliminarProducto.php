<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$idproducto = $_REQUEST["idproducto"];
$nombre_producto = $_REQUEST["nombre_producto"]; 
$cantidad = $_REQUEST["cantidad"]; 
$precio_unidad = $_REQUEST["precio_unidad"]; 
$idproveedorfk = $_REQUEST["idproveedorfk"]; 

$sql = mysqli_query($conexion , "SELECT `nombre_proveedor` FROM `proveedor`")or
die("Problemas en el select:" . mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar user</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../../public/css/ActualizarProductos.css">
</head>

<body>

    <div class="container">
        <form method="post" action="../../Services/EliminarProductoLogica.php">
            <div class="container-form">
                <h1>Eliminar Producto</h1>
                <div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="">Nombre Producto</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    value="<?php echo $idproducto; ?>" name="idproducto" />
                                <input type="text" readonly name="nombre_producto" class="form-control"
                                    value=<?php echo $nombre_producto; ?>>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cantidad</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">En Stock</span>
                                <input type="text" name="cantidad" readonly class="form-control"
                                    value=<?php echo $cantidad; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-4">
                        <div class="form-group col-md-6 ">
                            <label for="">Precio Unidad</label>
                            <div class="input-group" style="margin-left:-5px;">
                                <span class="input-group-text">COP</span>
                                <input readonly class="input-group-text" style="width:35px;  text-align: end;"
                                    value="$" />
                                <input type="text" name="precio_unidad" readonly class="form-control"
                                    value=<?php echo $precio_unidad; ?>>
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputPassword4">Proveedor</label>
                            <div class="input-group" style="">
                                <span class="input-group-text">ID</span>
                                <input readonly class="input-group-text" readonly style="width:35px;  text-align: end;"
                                    value="<?php echo $idproveedorfk; ?>" name="idproveedorfk" />
                                <select disabled name="idproveedorfk" class="form-select form-select-lg "
                                    style="font-size:1rem;">
                                    <?php
                                     while($fila = mysqli_fetch_array($sql)){
                                        $var = $fila['idproveedorfk'];
                                        $res  =mysqli_query($conexion,"SELECT `nombre_proveedor`FROM `proveedor` WHERE `idproveedor`='$var'");
                                        $row = mysqli_fetch_array($res);
                                ?>
                                    <option>
                                        <?php echo $fila['nombre_proveedor'];?>
                                    </option>
                                    <?php }
                                ?>
                                </select>
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