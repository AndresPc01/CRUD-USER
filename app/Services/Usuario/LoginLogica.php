<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include '../../../config/database.php';

if (isset($_REQUEST["usuario"]) && isset($_REQUEST["contraseña"])) {
    $usuario = $_REQUEST["usuario"];
    $contraseña = $_REQUEST["contraseña"];
    $hash_contraseña = md5($contraseña);

    $sql = mysqli_query($conexion, "SELECT `usuario`, `contrasena`, `nombre` FROM `usuario` WHERE `usuario` = '$usuario' AND `contrasena` = '$hash_contraseña' ");
    $fetch = mysqli_fetch_array($sql);
    $row = mysqli_num_rows($sql);

    if ($fetch && $row > 0) {  // Ensure $fetch is not false
        $_SESSION['nombre'] = $fetch['nombre'];
        header('location:../../../Home');
    } else {
        ?>
        <script>
            alert("Usuario o contraseña no existe");
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Campos vacíos");
    </script>
    <?php
}
?>