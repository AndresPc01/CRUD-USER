<?php
include '../../../../config/database.php';
$idcliente = $_REQUEST["idcliente"];
$estado_cliente = $_REQUEST["estado_cliente"];

if ($estado_cliente === 'Desabilitado') {
    $estado = 1;
} else if ($estado_cliente === 'Habilitado') {
    $estado = 2;
}

$sql = mysqli_query($conexion, "UPDATE `cliente` SET `estado_cliente`='$estado' WHERE `idcliente`='$idcliente'");

header("location:Clientes");
?>