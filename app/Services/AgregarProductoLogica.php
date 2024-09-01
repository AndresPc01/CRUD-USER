<?php
include '../../config/database.php';

$nombre_producto = $_REQUEST["nombre_producto"];
$cantidad = $_REQUEST["cantidad"];
$precio_unidad = $_REQUEST["precio_unidad"];
$idproveedorfk = $_REQUEST["idproveedorfk"];
$estado_producto = $_REQUEST["estado_producto"];

if ($estado_producto === 'Habilitado') {
    $estado = 1;
}else{
    $estado = 2;
}

$res = mysqli_query($conexion , "SELECT `idproveedor`FROM `proveedor` WHERE `nombre_proveedor`= '$idproveedorfk'");
$row = mysqli_fetch_array($res);
$val = $row['idproveedor'];
$sql = mysqli_query($conexion, "INSERT INTO `producto`(`nombre_producto`, `cantidad`,`precio_unidad`,`idproveedorfk`,`estado_producto`) VALUES ('$nombre_producto','$cantidad','$precio_unidad','$val','$estado')");

header("location:../Views/Productos.php");
?>