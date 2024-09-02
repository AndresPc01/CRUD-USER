<?php
include '../../../config/database.php';
$nombre_proveedor = $_REQUEST["nombre_proveedor"];
$telefono_proveedor = $_REQUEST["telefono_proveedor"];
$ciudad_proveedor = $_REQUEST["ciudad_proveedor"];

$sql = mysqli_query($conexion, "INSERT INTO `proveedor`(`nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor`) VALUES ('$nombre_proveedor','$telefono_proveedor','$ciudad_proveedor')");
header("location:../../Views/Proveedor.php");
?>