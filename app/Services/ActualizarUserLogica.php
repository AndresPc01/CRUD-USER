<?php


include '../../config/database.php';
$idusuario =$_REQUEST["idusuario"];
$nombre =$_REQUEST["nombre"];
$usuario =$_REQUEST["usuario"];
$contraseña =$_REQUEST["contraseña"]; 

$result = mysqli_query($conexion, "SELECT contrasena FROM usuario WHERE idusuario = '$idusuario'");
$row = mysqli_fetch_assoc($result);
$stored_password = $row['contrasena'];

// Verifica si la contraseña ingresada es diferente a la almacenada
if ($contraseña !== $stored_password) {
    // Si es diferente, encripta la nueva contraseña
    $hash_contraseña = md5($contraseña);
} else {
    // Si es la misma, usa la contraseña almacenada
    $hash_contraseña = $stored_password;
}

$sql = mysqli_query($conexion , "UPDATE `usuario` SET `usuario`='$usuario',`contrasena`='$hash_contraseña',`nombre`='$nombre' WHERE `idusuario`='$idusuario'");

header("location:../Views/Usuarios.php");

?>