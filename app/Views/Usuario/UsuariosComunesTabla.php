<?php
include '../../../config/database.php';

$sql = mysqli_query($conexion, "SELECT `idusuario`, `usuario`, `contrasena`, `nombre`, `idperfilfk`  FROM `usuario`") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Nombre</th>
                    <th>Tipo de Usuario</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <?php
            while ($fila = mysqli_fetch_array($sql)) {
                ?>
            <tbody>
                <tr><?php
                    $val = $fila['idperfilfk'];
                    $perfil = mysqli_query($conexion, "SELECT  `nombre_perfil` FROM `perfil` WHERE `IDPerfil`=$val") or
                        die("Problemas en el select:" . mysqli_error($conexion));
                    $row = mysqli_fetch_array($perfil);

                    ?>
                    <?php if ($row['nombre_perfil'] === 'Usuario Comun') { ?>
                    <td><?php echo $fila['idusuario']; ?></td>
                    <td><?php echo $fila['usuario']; ?></td>
                    <td><?php echo $fila['contrasena']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td>
                        <?php echo $row['nombre_perfil']; ?>
                    </td>
                    <td><a href="ActualizarUsuario?idusuario=<?php echo $fila['idusuario'] ?>&usuario=<?php echo $fila['usuario'] ?>&contraseña=<?php echo $fila['contrasena'] ?>&nombre=<?php echo $fila['nombre'] ?>&nombre_perfil=<?php echo $row['nombre_perfil'] ?> "
                            class="btn btn-primary">Actualizar</a></td>
                    <td><a href="EliminarUsuario?idusuario=<?php echo $fila['idusuario'] ?>&usuario=<?php echo $fila['usuario'] ?>&contraseña=<?php echo $fila['contrasena'] ?>&nombre=<?php echo $fila['nombre'] ?>&nombre_perfil=<?php echo $row['nombre_perfil'] ?>  "
                            class="btn btn-primary">Eliminar</a></td>
                    <?php } ?>
                <tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>