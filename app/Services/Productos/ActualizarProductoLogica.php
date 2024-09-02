<?php
include '../../../config/database.php';
$idproducto = $_REQUEST["idproducto"];
$nombre_producto = $_REQUEST["nombre_producto"];
$cantidad = $_REQUEST["cantidad"];
$precio_unidad = $_REQUEST["precio_unidad"];
$idproveedorfk = $_REQUEST["idproveedorfk"];


$res = mysqli_query($conexion, "SELECT `idproveedor`FROM `proveedor` WHERE `nombre_proveedor`='$idproveedorfk'");
$row = mysqli_fetch_array($res);
$val = $row['idproveedor'];

$sql = mysqli_query($conexion, "UPDATE `producto` SET `nombre_producto`='$nombre_producto',`cantidad`='$cantidad',`precio_unidad`='$precio_unidad',`idproveedorfk`='$val' WHERE `idproducto`='$idproducto'");

header("location:../../Views/Productos/Productos.php");


?>