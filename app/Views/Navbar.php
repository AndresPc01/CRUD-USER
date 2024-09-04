<link rel="stylesheet" href="../../public/css/Navbar.css">
<header>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="margin-right:50px; color:#ddd; font-style: Serif; font-weight: bolder;"
                    href="../Dashboard/Dashboard.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="../Usuario/Usuarios.php">Usuarios</a>
                        <a class="nav-link" href="../Productos/Productos.php">Productos</a>
                        <a class="nav-link" href="../Cliente/Clientes.php">Clientes</a>
                        <a class="nav-link" href="../Proveedor/Proveedor.php">Proveedores</a>
                    </div>
                </div>
            </div>
            <div class="dropdown" id="dropdown">

                <small>Bienvenido</small>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo strtoupper($_SESSION['nombre']); ?>
                </button>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../Services/Usuario/CerrarSesionLogica.php">Cerrar
                            Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    </div>
</header>