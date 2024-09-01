<?php
session_start();
include '../../config/database.php';
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];
$hash_contraseña = md5($contraseña);

$sql = mysqli_query($conexion , "SELECT `usuario`, `contrasena`, `nombre` FROM `usuario` WHERE  `usuario` = '$usuario' AND `contrasena` = '$hash_contraseña' ");
$fecth = mysqli_fetch_array($sql);
$dat = $fecth['nombre'];
$row = mysqli_num_rows($sql);
if ($row){
    $_SESSION['nombre'] = $dat;
    header('location:../Views/Dashboard.php');
} else {
    ?>
<script>
alert("Usuario o password no existe");
</script>
<?php
}
?>