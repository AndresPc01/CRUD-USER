<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="contet">
                <a href="index" class="boton">Pagina Principal</a>
            </div>
        </div>
    </nav>
    <form method="post" action="./app/Services/Usuario/LoginLogica.php">
        <div class="container-form">

            <div id="cont">
                <div id="cont_title">
                    <h1>LOGUEATE</h1>
                </div>
                <div id="contenedor_register">
                    <div class="contenedor_input">
                        <div id="input">
                            <input type="text" name="usuario" required placeholder="Usuario">
                        </div>
                        <div id="input">
                            <input type="password" name="contraseña" required placeholder="Password">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
                    <span style="color:black;">Si No tienes cuenta <a href="Register">Registrate</a></span>
                </div>
            </div>
        </div>
    </form>


</body>

</html>