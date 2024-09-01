<?php

if (!isset($_SESSION['nombre'])) {
    header("location:../../public/index.php");
    exit();
}
?>