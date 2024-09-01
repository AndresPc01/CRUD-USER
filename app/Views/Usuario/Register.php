<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../../public/css/Login.css">
</head>

<body>
    <div class="container">
        <form method="post" autocomplete="off" action="../../app/Services/RegisterLogica.php">
            <div class="container-form">
                <h1>Register</h1>
                <div>
                    <input type="text" name="nombre" required class="form-control" placeholder="Nombre">
                </div>
                <div>
                    <input type="text" name="usuario" required class="form-control" placeholder="Usuario">
                </div>
                <div>
                    <input type="password" name="contraseña" required class="form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary" value="Registrarse">
                <span style="color:black;">Si tienes cuenta <a href="../../public/index.php">Logueate</a></span>
            </div>
        </form>
    </div>
</body>

</html>