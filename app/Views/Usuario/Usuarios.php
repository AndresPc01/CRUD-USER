<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
include '../../../public/css/Plugins.php';
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
</head>

<body class="d-flex">
    <?php include '../Navbar.php'; ?>

    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12 d-flex text-center justify-content-center">
                <div class="d-flex align-items-center" style=" float:left;">
                    <h1 class=" text-center p-3">
                        CRUD DE USUARIOS
                    </h1>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Total Clientes</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Administradores</button>
                    <button class="nav-link" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user"
                        type="button" role="tab" aria-controls="nav-user" aria-selected="false">Usuarios
                        Comunes</button>
                    <button class="nav-link" id="nav-vend-tab" data-bs-toggle="tab" data-bs-target="#nav-vend"
                        type="button" role="tab" aria-controls="nav-vend" aria-selected="false">Vendedores
                    </button>
                    <button class="nav-link" id="nav-prov-tab" data-bs-toggle="tab" data-bs-target="#nav-prov"
                        type="button" role="tab" aria-controls="nav-prov" aria-selected="false">Proveedores
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0"><?php include './UsuarioTabla.php' ?></div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0"><?php include './AdministradoresTabla.php' ?></div>
                <div class="tab-pane fade" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab" tabindex="0">
                    <?php include './UsuariosComunesTabla.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-vend" role="tabpanel" aria-labelledby="nav-vend-tab" tabindex="0">
                    <?php include './UsuariosVendedoresTabla.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-prov" role="tabpanel" aria-labelledby="nav-prov-tab" tabindex="0">
                    <?php include './UsuariosProveedorTabla.php' ?>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>