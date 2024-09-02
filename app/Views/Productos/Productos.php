<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
    <?php include '../../../public/css/Plugins.php' ?>
</head>

<body>
    <?php include '../Navbar.php'; ?>
    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12  d-flex text-center justify-content-center">
                <h1 class=" text-center p-3">
                    PRODUCTOS
                </h1>
                <div class="d-flex align-items-center" style="margin-left:35px;">
                    <a href="./AgregarProducto" class=" btn btn-info ">Agregar Nuevo Producto</a>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Productos
                        Habilitado</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Productos
                        Desabilitado</button>
                </div>
            </nav>
            <div class=" tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <?php include './ProductosTabla.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0"> <?php include './ProductosDesabilitados.php'; ?></div>
            </div>
        </div>
    </div>
</body>

</html>