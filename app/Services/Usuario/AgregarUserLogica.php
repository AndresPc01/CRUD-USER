<?php
include '../../../config/database.php';
$nombre = $_REQUEST["nombre"];
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];
$perfil = $_REQUEST["idperfilfk"];
$hash_contraseña = md5($contraseña);


$con = mysqli_query($conexion, "SELECT `IDPerfil`, `nombre_perfil` FROM `perfil` WHERE `nombre_perfil`='$perfil' ");
$row = mysqli_fetch_array($con);
$valor = $row['IDPerfil'];
$sql = mysqli_query($conexion, "INSERT INTO `usuario`(`usuario`, `contrasena`, `nombre`, `idperfilfk`) VALUES ('$usuario','$hash_contraseña','$nombre','$valor')");

header("location:Usuarios");
?>