<?php
session_start();
session_unset(); // Remove all session variables
session_destroy();
header("Location:../../../public/index.php");
?>