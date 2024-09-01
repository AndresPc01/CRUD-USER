<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../config/database.php';
$idproveedor = $_REQUEST["idproveedor"];
$estado_proveedor = $_REQUEST["estado_proveedor"]; 

if ($estado_proveedor === 'Desabilitado') {
    $estado = 1;
}else if ($estado_proveedor === 'Habilitado') {
    $estado = 2;
}
$sql = mysqli_query($conexion , "UPDATE `proveedor` SET `estado_proveedor`='$estado' WHERE `idproveedor`='$idproveedor'");
header("location:../Views/Proveedor.php");
?>