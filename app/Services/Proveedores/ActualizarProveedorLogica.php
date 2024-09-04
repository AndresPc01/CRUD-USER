<?php
include '../../../config/database.php';
$idproveedor = $_REQUEST["idproveedor"];
$nombre_proveedor = $_REQUEST["nombre_proveedor"];
$telefono_proveedor = $_REQUEST["telefono_proveedor"];
$ciudad_proveedor = $_REQUEST["ciudad_proveedor"];

$sql = mysqli_query($conexion, "UPDATE `proveedor` SET `nombre_proveedor`='$nombre_proveedor',`telefono_proveedor`='$telefono_proveedor',`ciudad_proveedor`='$ciudad_proveedor' WHERE `idproveedor`='$idproveedor' ");

header("location:Proveedores");

?>