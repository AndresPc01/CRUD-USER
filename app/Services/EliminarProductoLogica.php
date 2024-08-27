<?php
include '../../config/database.php';
$idproducto =$_REQUEST["idproducto"];

echo $idproducto;

$sql = mysqli_query($conexion , "DELETE FROM `producto` WHERE `idproducto`='$idproducto'");

header("location:../Views/Productos.php");

?>