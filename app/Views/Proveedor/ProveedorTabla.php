<?php
include '../../Controllers/ProtectDashboard.php';
include '../../../config/database.php';
$sql = mysqli_query($conexion, "SELECT `idproveedor`, `nombre_proveedor`, `telefono_proveedor`, `ciudad_proveedor`, IF(estado_proveedor=1,'Habilitado','Desabilitado')AS estado_proveedor FROM `proveedor` ") or
    die("Problemas en el select : " . mysqli_error($conexion));
?>
<div class="col-md-12 text-center">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Proveedor</th>
                <th>telefono </th>
                <th>ciudad</th>
                <th>Estado</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <?php
        while ($fila = mysqli_fetch_array($sql)) {
            ?>
        <tbody>
            <tr>
                <?php if ($fila['estado_proveedor'] === 'Habilitado') {
                        ?>
                <td><?php echo $fila['idproveedor']; ?></td>
                <td><?php echo $fila['nombre_proveedor']; ?></td>
                <td><?php echo $fila['telefono_proveedor']; ?></td>
                <td><?php echo $fila['ciudad_proveedor']; ?></td>
                <td class="bg-success"><?php echo $fila['estado_proveedor']; ?></td>
                <td><a href="ActualizarProveedor?idproveedor=<?php echo $fila['idproveedor'] ?>&nombre_proveedor=<?php echo $fila['nombre_proveedor'] ?>&telefono_proveedor=<?php echo $fila['telefono_proveedor'] ?>&ciudad_proveedor=<?php echo $fila['ciudad_proveedor'] ?>"
                        class="btn btn-primary">Actualizar</a></td>
                <td><a href="EstadoProveedor?idproveedor=<?php echo $fila['idproveedor'] ?>&estado_proveedor=<?php echo $fila['estado_proveedor'] ?>"
                        class="btn btn-danger">Desabilitar</a></td>
                <?php } ?>
            <tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</div>