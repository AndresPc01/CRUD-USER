<?php
include '../../config/database.php';
$idcliente =$_REQUEST["idcliente"];
$sql = mysqli_query($conexion , "DELETE FROM `cliente` WHERE `idcliente`='$idcliente'");

header("location:../Views/Clientes.php");

?>