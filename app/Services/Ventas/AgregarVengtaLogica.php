<?php
include 'conexion.php';
include 'plugins.php';

$cliente = $_REQUEST['cliente'];
$producto = $_REQUEST['producto'];
$cantidad = $_REQUEST['cantidad_producto'];
$fecha = DATE('Y-m-d');

///registra las ventas
mysqli_query($link, "Insert into ventas(idclientefk,
                                        idproductofk,
                                        cantidad_venta,
                                        fecha_venta)values($cliente,
                                                           $producto,
                                                           $cantidad,
                                                           '$fecha')");


//actualizar el inventario

$sql = mysqli_query($link, "UPDATE producto SET  cantidad = cantidad - $cantidad
    WHERE idproducto = $producto");

header("location:../consultaventas.php");
?>