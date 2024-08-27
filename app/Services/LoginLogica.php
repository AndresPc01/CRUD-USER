<?php
include '../../config/database.php';
$usuario = $_REQUEST["usuario"];
$contraseña = $_REQUEST["contraseña"];
$hash_contraseña = md5($contraseña);

$sql = mysqli_query($conexion , "SELECT `usuario`, `contrasena` FROM `usuario` WHERE  `usuario` = '$usuario' AND `contrasena` = '$hash_contraseña' ");

$row = mysqli_num_rows($sql);

if ($row){
    header('location:../../app/Views/Dashboard.php');
}else{
    ?>
<script>
alert("Usuario o password no existe");
</script>
<?php

}

?>