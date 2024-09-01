<?php
include '../../config/database.php';
$idproveedor =$_REQUEST["idproveedor"];


$sql = mysqli_query($conexion , "DELETE FROM `proveedor` WHERE `idproveedor`='$idproveedor'");

header("location:../Views/Proveedor.php");

?>