<?php
include '../../../config/database.php';
$idusuario = $_REQUEST["idusuario"];
$sql = mysqli_query($conexion, "DELETE FROM `usuario` WHERE `idusuario`='$idusuario'");

header("location:../../Views/Usuarios.php");

?>