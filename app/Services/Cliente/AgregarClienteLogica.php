<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../../../config/database.php';

$identidad = $_REQUEST["identidad"];
$nombre = $_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$direccion = $_REQUEST["direccion"];
$estado_cliente = $_REQUEST["estado_cliente"];

if ($estado_cliente === "Habilitado") {
    $estado = 1;
} else {
    $estado = 2;
}

$sql = mysqli_query($conexion, "INSERT INTO `cliente`(`identidad`, `nombre`,`telefono`,`direccion`,`estado_cliente`) VALUES ('$identidad','$nombre','$telefono','$direccion','$estado')");

header("location:Clientes");
?>