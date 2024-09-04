<link rel="stylesheet" href="public/css/Navbar.css">
<div id="header_nav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-right:50px; color:#ddd; font-style: Serif; font-weight: bolder;"
                href="Home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Usuarios">Usuarios</a>
                    <a class="nav-link" href="Productos">Productos</a>
                    <a class="nav-link" href="Clientes">Clientes</a>
                    <a class="nav-link" href="Proveedores">Proveedores</a>
                </div>
            </div>
        </div>
        <div class="btn-group mx-4" id="dropdown">
            <small>Bienvenido</small>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php echo strtoupper($_SESSION['nombre']); ?>
            </button>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                <li><a class="dropdown-item" href="CloseSesion">Cerrar
                        Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
</div>