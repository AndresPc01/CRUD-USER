<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../public/css/Plugins.php'; ?>
    <link rel="stylesheet" href="../public/css/Login.css">
</head>

<body>
    <div class="container">
        <form method="post" action="../app/Services/LoginLogica.php">
            <div class="container-form">
                <h1>Login</h1>
                <div>
                    <input type="text" required name="usuario" class="form-control" placeholder="Usuario">
                </div>
                <div>
                    <input type="password" required name="contraseña" class="form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
                <span style="color:black;">Si no tienes cuenta <a href="../app/Views/Register.php">Registrate</a></span>
            </div>

        </form>

    </div>
</body>

</html>