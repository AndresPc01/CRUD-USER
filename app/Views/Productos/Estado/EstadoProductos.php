<?php
include '../../../../config/database.php';
$idproducto = $_REQUEST["idproducto"];
$estado_producto = $_REQUEST["estado_producto"];

if ($estado_producto === 'Desabilitado') {
    $estado = 1;
} else if ($estado_producto === 'Habilitado') {
    $estado = 2;
}

$sql = mysqli_query($conexion, "UPDATE `producto` SET `estado_producto`='$estado' WHERE `idproducto`='$idproducto'");

header("location:../Productos.php");
?>