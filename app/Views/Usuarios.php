<?php 
include '../../config/database.php';
include '../../public/css/Plugins.php';
$sql=mysqli_query($conexion, "SELECT `idusuario`, `usuario`, `contrasena`, `nombre` FROM `usuario`") or
die("Problemas en el select:" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
</head>

<body>
    <?php include '../../resources/views/Navbar.php'; ?>

    <div class="container"
        style="margin-top:15px; background-color:#343A40; padding:10px; border:1px solid; border-radius:15px; min-height:80vh; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class=" text-center p-3">
                    CRUD DE USUARIOS
                </h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Nombre</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <?php
                    while($fila = mysqli_fetch_array($sql)){
 ?>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['idusuario']; ?></td>
                                <td><?php echo $fila['usuario']; ?></td>
                                <td><?php echo $fila['contrasena']; ?></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><a href="./ActualizarUser.php?idusuario=<?php echo $fila['idusuario'] ?>&usuario=<?php echo $fila['usuario'] ?>&contraseña=<?php echo $fila['contrasena'] ?>&nombre=<?php echo $fila['nombre']?> "
                                        class="btn btn-primary">Actualizar</a></td>
                                <td><a href="./EliminarUser.php?idusuario=<?php echo $fila['idusuario'] ?>&usuario=<?php echo $fila['usuario'] ?>&contraseña=<?php echo $fila['contrasena'] ?>&nombre=<?php echo $fila['nombre']?> "
                                        class="btn btn-primary">Eliminar</a></td>
                            <tr>
                        </tbody>
                        <?php       
 }
?>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>