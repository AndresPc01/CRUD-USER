<?php
include '../../../config/database.php';

$sql = mysqli_query($conexion, "SELECT `idcliente`, `identidad`, `nombre`, `telefono`, `direccion`, IF(estado_cliente=2,'Desabilitado','Habilitado')AS estado_cliente FROM `cliente`") or
    die("Problemas en el select:" . mysqli_error($conexion));

?>
<div class=" row">
    <div class="col-md-12">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Identidad</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Habilitar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <?php
            while ($fila = mysqli_fetch_array($sql)) {
                ?>
            <tbody>
                <tr>
                    <?php if ($fila['estado_cliente'] === 'Desabilitado') { ?>
                    <td><?php echo $fila['idcliente']; ?></td>
                    <td><?php echo $fila['identidad']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['telefono']; ?></td>
                    <td><?php echo $fila['direccion']; ?></td>
                    <td class="bg-danger"><?php echo $fila['estado_cliente']; ?></td>
                    <td><a href="EstadoCliente?idcliente=<?php echo $fila['idcliente'] ?>&estado_cliente=<?php echo $fila['estado_cliente'] ?> "
                            class="btn btn-success">Habilitar</a></td>
                    <td><a href="./EliminarCliente.php?idcliente=<?php echo $fila['idcliente'] ?>&identidad=<?php echo $fila['identidad'] ?>&telefono=<?php echo $fila['telefono'] ?>&nombre=<?php echo $fila['nombre'] ?>&direccion=<?php echo $fila['direccion'] ?> "
                            class="btn btn-Danger">Eliminar</a></td>
                    <?php } ?>
                <tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>