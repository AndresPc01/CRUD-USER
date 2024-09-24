<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ventas</title>
    <?php include '../../../public/css/Plugins.php';?>
</head>


<body class="d-flex">
    <?php include '../Navbar.php'; ?>
    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12 d-flex text-center justify-content-center">
                <div class="d-flex align-items-center" style=" float:left;">
                    <h1 class=" text-center p-3">
                        CRUD DE Ventas
                    </h1>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Total Ventas</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0"><?php include './ventastabla.php' ?></div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>