<?php

$server ="localhost";
$user = "root";
$pass = "";
$db =  "app";

$conexion = mysqli_connect($server,$user,$pass,$db);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

?>