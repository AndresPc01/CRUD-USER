<?php
session_start();
include 'menu.php';
include 'procesoPHP/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "procesoPHP/plugins.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning text-center" role="alert">
                    REGISTRO DE VENTAS
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- formulario con accion al addventas.php-->
                <form method="POST" action="procesoPHP/AddVentas.php">
                    <div class="row">
                        <!-- Select Lista de clientes-->


                        <?php
                        $sql = mysqli_query($link, "SELECT idcliente,nombre
                          FROM cliente
                          ORDER BY nombre");
                        ?>
                        <div class="col-md-5">
                            <label>Cliente</label>
                            <select name="cliente" class="form-control" require>
                                <option value=""> Seleccione cliente</option>
                                <?php
                                while ($row = mysqli_fetch_array($sql)) { ?>
                                <option value="<?= $row['idcliente'] ?>"> <?= $row['nombre'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Select Lista de productos-->

                        <?php
                        $sql = mysqli_query($link, "SELECT idproducto,nombre_producto
                          FROM producto
                          ORDER BY nombre_producto");
                        ?>

                        <div class="col-md-5">
                            <label>Producto</label>
                            <select name="producto" class="form-control" require>
                                <option value=""> Seleccione producto</option>
                                <?php
                                while ($row = mysqli_fetch_array($sql)) { ?>
                                <option value="<?= $row['idproducto'] ?>"> <?= $row['nombre_producto'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>


                        <!-- campo de cantidad de productos-->
                        <div class="col-md-2">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad_producto" class="form-control" required>
                        </div>

                    </div>
                    <br>
                    <!-- Botones de envio y consulta-->
                    <div class="row">
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-success btn-block" value="Guardar">
                        </div>
                        <div class="col-md-1">
                            <a href="consultaventas.php" class="btn btn-primary">Consultar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>