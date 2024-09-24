<?php
session_start();
include '../../Controllers/ProtectDashboard.php';
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="display:flex;">

    <?php include '../Navbar.php'; ?>

    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12  d-flex text-center justify-content-center">
                <div class="d-flex align-items-center" style=" float:left;">
                    <h1 class=" text-center p-3">
                        CRUD DE PRODUCTOS
                    </h1>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-ProductosHabilitado-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-ProductosHabilitado" type="button" role="tab"
                        aria-controls="nav-ProductosHabilitado" aria-selected="true">Productos
                        Habilitado</button>
                    <button class="nav-link" id="nav-ProductosDesabilitado-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-ProductosDesabilitado" type="button" role="tab"
                        aria-controls="nav-ProductosDesabilitado" aria-selected="false">Productos
                        Desabilitado</button>
                    <button class="nav-link" id="nav-ProductosTotal-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-ProductosTotal" type="button" role="tab" aria-controls="nav-ProductosTotal"
                        aria-selected="false">Total De
                        Productos</button>
                </div>
            </nav>
            <div class=" tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ProductosHabilitado" role="tabpanel"
                    aria-labelledby="nav-ProductosHabilitado-tab" tabindex="0">
                    <?php include 'ProductosTabla.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-ProductosDesabilitado" role="tabpanel"
                    aria-labelledby="nav-ProductosDesabilitado-tab" tabindex="0">
                    <?php include 'ProductosDesabilitados.php'; ?>
                </div>
                <div class="tab-pane fade" id="nav-ProductosTotal" role="tabpanel"
                    aria-labelledby="nav-ProductosTotal-tab" tabindex="0">
                    <?php include 'ProductosTotal.php' ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>