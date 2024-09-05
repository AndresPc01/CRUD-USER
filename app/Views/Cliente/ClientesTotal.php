<?php
include '../../../config/database.php';

$sql = mysqli_query($conexion, "SELECT `idcliente`, `identidad`, `nombre`, `telefono`, `direccion`, IF(estado_cliente=1,'Habilitado','Desabilitado')AS estado_cliente FROM `cliente`") or
    die("Problemas en el select:" . mysqli_error($conexion));

?>
<div class=" row ">
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
                </tr>
            </thead>
            <?php
            while ($fila = mysqli_fetch_array($sql)) {
                ?>
                <tbody>
                    <tr>

                        <td><?php echo $fila['idcliente']; ?></td>
                        <td><?php echo $fila['identidad']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['telefono']; ?></td>
                        <td><?php echo $fila['direccion']; ?></td>
                        <?php if ($fila['estado_cliente'] === 'Habilitado') {
                            ?>
                            <td class="bg-success"><?php echo $fila['estado_cliente']; ?></td>
                        <?php } else { ?>
                            <td class="bg-danger"><?php echo $fila['estado_cliente']; ?></td>

                        <?php } ?>
                    <tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>