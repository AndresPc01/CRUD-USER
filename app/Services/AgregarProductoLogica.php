<?php
include '../../config/database.php';
$nombre_producto =$_REQUEST["nombre_producto"];
$cantidad =$_REQUEST["cantidad"];
$precio_unidad =$_REQUEST["precio_unidad"];
$idproveedorfk =$_REQUEST["idproveedorfk"]; 
$res  =mysqli_query($conexion,"SELECT `idproveedor`FROM `proveedor` WHERE `nombre_proveedor`='$idproveedorfk'");
$row = mysqli_fetch_array($res);
$val = $row['idproveedor'];
$sql = mysqli_query($conexion , "INSERT INTO `producto`(`nombre_producto`, `cantidad`, `precio_unidad`, `idproveedorfk`) VALUES ('$nombre_producto','$cantidad','$precio_unidad','$val')");
header("location:../Views/Productos.php");
?>