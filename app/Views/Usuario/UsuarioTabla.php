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

                </tr>
            </thead>
            <?php
            while ($fila = mysqli_fetch_array($sql)) {
                ?>


                <tbody>
                    <tr>
                        <td><?php echo $fila['idusuario']; ?></td>
                        <td><?php echo $fila['usuario']; ?></td>
                        <td><?php echo $fila['contrasena']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <?php $val = $fila['idperfilfk'];
                        $perfil = mysqli_query($conexion, "SELECT  `nombre_perfil`, `color_perfil` FROM `perfil` WHERE `IDPerfil`=$val") or
                            die("Problemas en el select:" . mysqli_error($conexion));
                        $row = mysqli_fetch_array($perfil); ?>
                        <td class="<?php echo $row['color_perfil']; ?>"> <?php echo $row['nombre_perfil'] ?></td>
                    <tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>