<?php
include '../../../config/database.php';
$nombre = $_REQUEST["nombre"];
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];
$hash_contraseña = md5($contraseña);

$sql = mysqli_query($conexion, "INSERT INTO `usuario`(`usuario`, `contrasena`, `nombre`) VALUES ('$usuario','$hash_contraseña','$nombre')");
if (!$sql) {
    echo "datos no enviados";
} else {
    header('location:Login');
}

?>