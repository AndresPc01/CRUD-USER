<?php
session_start();
session_unset(); // Remove all session variables
session_destroy();

echo '<script>
    localStorage.clear();
    window.location.href = "Login"; // Redirige al usuario a la página de inicio de sesión
</script>';
?>