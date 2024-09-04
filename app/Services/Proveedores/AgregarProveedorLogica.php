<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../../../config/database.php';
$nombre = $_REQUEST["nombre_proveedor"];
$telefono = $_REQUEST["telefono_proveedor"];
$ciudad = $_REQUEST["ciudad_proveedor"];
$estado_proveedor = $_REQUEST["estado_proveedor"];

if ($estado_proveedor === 'Habilitado') {
    $estado = 1;
} else {
    $estado = 2;
}


$sql = mysqli_query($conexion, "INSERT INTO `proveedor`(`nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor`, `estado_proveedor`) VALUES ('$nombre','$telefono','$ciudad','$estado')");

header("location:Proveedores");


?>