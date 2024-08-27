<?php
include '../../config/database.php';
$idcliente =$_REQUEST["idcliente"];
$identidad =$_REQUEST["identidad"];
$nombre =$_REQUEST["nombre"];
$telefono =$_REQUEST["telefono"];
$direccion =$_REQUEST["direccion"]; 

$sql = mysqli_query($conexion , "UPDATE `cliente` SET `identidad`='$identidad',`nombre`='$nombre',`telefono`='$telefono',`direccion`='$direccion' WHERE `idcliente`='$idcliente' ");

header("location:../Views/Clientes.php");

?>