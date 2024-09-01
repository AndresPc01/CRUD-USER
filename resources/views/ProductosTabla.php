<?php 
session_start();
include '../Controllers/ProtectDashboard.php';
include '../../config/database.php';
$sql=mysqli_query($conexion, "SELECT `idproducto`, `nombre_producto`, `cantidad`, `precio_unidad`, `idproveedorfk`,IF(estado_producto=1,'Habilitado','Desabilitado')AS estado_producto FROM `producto`;") or
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
                    <th>Desabilitar</th>
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
                    <?php if ($fila['estado_producto'] === 'Habilitado') { 
                    ?>
                    <td><?php echo $fila['idproducto']; ?></td>
                    <td><?php echo $fila['nombre_producto']; ?></td>
                    <td><?php echo $fila['cantidad']; ?></td>
                    <td><?php echo "$ ".$fila['precio_unidad']." COP"; ?></td>
                    <td><?php echo $fila['idproveedorfk']; ?></td>
                    <?php if ($row['estado_proveedor'] === '2') { 
                    ?>
                    <td class="d-flex flex-column bg-danger"><?php echo $row['nombre_proveedor']; ?> <small>(Proveedor
                            desabilitado)</small>
                    </td>

                    <?php } else {   ?>
                    <td><?php echo $row['nombre_proveedor']; ?></td>
                    <?php }?>
                    <td class="bg-success"><?php echo $fila['estado_producto'];?></td>
                    <td><a href="./ActualizarProducto.php?idproducto=<?php echo $fila['idproducto'] ?>&nombre_producto=<?php echo $fila['nombre_producto'] ?>&cantidad=<?php echo $fila['cantidad'] ?>&precio_unidad=<?php echo $fila['precio_unidad']?>&idproveedorfk=<?php echo $fila['idproveedorfk']?>&estado_producto=<?php echo $fila['estado_producto']?> "
                            class="btn btn-primary">Actualizar</a></td>
                    <td><a href="../Controllers/EstadoProductos.php?idproducto=<?php echo $fila['idproducto'] ?>&estado_producto=<?php echo $fila['estado_producto']?> "
                            class="btn btn-danger">Desabilitar</a></td>
                    </td>
                    <?php }  ?>
                <tr>
            </tbody>
            <?php       
 }
?>
        </table>
    </div>
</div>