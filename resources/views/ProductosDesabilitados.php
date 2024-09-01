<?php 
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
include '../../public/css/Plugins.php';
$sql=mysqli_query($conexion, "SELECT `idproducto`, `nombre_producto`, `cantidad`, `precio_unidad`, `idproveedorfk`,IF(estado_producto=2,'Desabilitado','Habilitado')AS estado_producto FROM `producto`;") or
die("Problemas en el select:" . mysqli_error($conexion));
?>


<div class="row">
    <div class="col-md-12 text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unidad</th>
                    <th>ID Proveedor</th>
                    <th>Nombre Proveedor</th>
                    <th>Estado</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <?php
                    while($fila = mysqli_fetch_array($sql)){
                        $var = $fila['idproveedorfk'];
                        $res  =mysqli_query($conexion,"SELECT `nombre_proveedor`,`estado_proveedor`FROM `proveedor` WHERE `idproveedor`='$var'");
                        $row = mysqli_fetch_array($res);
 ?>
            <tbody>
                <tr>
                    <?php if ($fila['estado_producto'] === 'Desabilitado') { ?>
                    <td><?php echo $fila['idproducto']; ?></td>
                    <td><?php echo $fila['nombre_producto']; ?></td>
                    <td><?php echo $fila['cantidad']; ?></td>
                    <td><?php echo "$ ".$fila['precio_unidad']." COP"; ?></td>
                    <td><?php echo $fila['idproveedorfk']; ?></td>
                    <?php if ($row['estado_proveedor'] === '2') { 
                    ?>
                    <td class="d-flex flex-column bg-danger mx-1"><?php echo $row['nombre_proveedor']; ?>
                        <small>(Proveedor
                            desabilitado)</small>
                    </td>

                    <?php } else {   ?>
                    <td><?php echo $row['nombre_proveedor']; ?></td>
                    <?php }?>
                    <td class="bg-danger"><?php echo $fila['estado_producto'];?></td>
                    <td><a href="../../app/Controllers/EstadoProductos.php?idproducto=<?php echo $fila['idproducto'] ?>&nombre_producto=<?php echo $fila['nombre_producto'] ?>&cantidad=<?php echo $fila['cantidad'] ?>&precio_unidad=<?php echo $fila['precio_unidad']?>&idproveedorfk=<?php echo $fila['idproveedorfk']?>&estado_producto=<?php echo $fila['estado_producto']?> "
                            class="btn btn-success">Habilitar</a></td>
                    <td><a href="../../app/Views/EliminarProducto.php?idproducto=<?php echo $fila['idproducto'] ?>&nombre_producto=<?php echo $fila['nombre_producto'] ?>&cantidad=<?php echo $fila['cantidad'] ?>&precio_unidad=<?php echo $fila['precio_unidad']?>&idproveedorfk=<?php echo $fila['idproveedorfk']?>&estado_producto=<?php echo $fila['estado_producto']?> "
                            class="btn btn-danger">Eliminar</a></td>
                    </td>
                    <?php  } ?>
                <tr>
            </tbody>
            <?php       
 }
?>
        </table>
    </div>
</div>