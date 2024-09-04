<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="public/css/Register.css">
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

    <form method="post" autocomplete="off" action="../../app/Services/Usuario/RegisterLogica.php">

        <div class="container-form">
            <div id="cont">
                <div id="cont_title">
                    <h1>REGISTRATE</h1>
                </div>
                <div id="contenedor_register">
                    <div id="input">
                        <input type="text" name="nombre" required placeholder="Nombre">
                    </div>
                    <div id="input">
                        <input type="text" name="usuario" required placeholder="Usuario">
                    </div>
                    <div id="input">
                        <input type="password" name="contraseña" required placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Registrarse">
                    <span style="color:black;">Si tienes cuenta <a href="Login">Logueate</a></span>
                </div>
            </div>
        </div>
    </form>

</body>

</html>