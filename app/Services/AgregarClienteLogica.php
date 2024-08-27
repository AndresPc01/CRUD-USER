<?php
include '../../config/database.php';

$identidad = $_REQUEST["identidad"];
$nombre = $_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$direccion = $_REQUEST["direccion"];


$sql = mysqli_query($conexion , "INSERT INTO `cliente`(`identidad`, `nombre`, `telefono`, `direccion`) VALUES ('$identidad','$nombre','$telefono','$direccion')");
if (!$sql){
    echo "datos no enviados";
}else{
    header('location:../Views/Clientes.php');
}

?>