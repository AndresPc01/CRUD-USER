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
            </tr>
        </thead>
        <?php
        while ($fila = mysqli_fetch_array($sql)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $fila['idproveedor']; ?></td>
                    <td><?php echo $fila['nombre_proveedor']; ?></td>
                    <td><?php echo $fila['telefono_proveedor']; ?></td>
                    <td><?php echo $fila['ciudad_proveedor']; ?></td>
                    <?php if ($fila['estado_proveedor'] === "Habilitado") { ?>
                        <td class="bg-success"><?php echo $fila['estado_proveedor']; ?></td>
                    <?php } else { ?>
                        <td class="bg-danger"><?php echo $fila['estado_proveedor']; ?></td>
                    <?php } ?>


                <tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>