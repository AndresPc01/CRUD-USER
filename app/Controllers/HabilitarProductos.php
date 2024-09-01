<?php
include '../../config/database.php';
$idproducto = $_REQUEST["idproducto"];
$estado_producto = $_REQUEST["estado_producto"]; 

if ($estado_producto === 'Desabilitado') {
    $estado = 1;
}

$sql = mysqli_query($conexion , "UPDATE `producto` SET `estado_producto`='$estado' WHERE `idproducto`='$idproducto'");

header("location:../Views/Productos.php")
?>