<?php 
include '../../../config/database.php';

$sql = mysqli_query($conexion, "SELECT 
            v.idventa, 
            c.idcliente, 
            c.nombre AS nombre_cliente, 
            c.telefono, -- Agregar teléfono del cliente
            p.idproducto, 
            p.nombre_producto AS nombre_producto,
            p.precio_unidad,
            v.cantidad,
            v.cantidad * p.precio_unidad as subtotal,
            (v.cantidad * p.precio_unidad)* 0.19 as iva, 
            (v.cantidad * p.precio_unidad) + ((v.cantidad * p.precio_unidad)* 0.19) as total
        FROM 
            ventas v    
        JOIN 
            cliente c ON v.idclientefk = c.idcliente
        JOIN 
            producto p ON v.idproductofk = p.idproducto
    ");
?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Teléfono</th>
                    <th>Cantidad</th>
                    <th>Producto</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php while ($fila = mysqli_fetch_array($sql)) { ?>
            <tbody>
                <tr>
                    <td><?= $fila['idventa']; ?></td>
                    <td><?= $fila['nombre_cliente']; ?></td>
                    <td><?= $fila['telefono']; ?></td>
                    <td><?= $fila['cantidad']; ?></td>
                    <td><?= $fila['nombre_producto']; ?></td>
                    <td><?= $fila['subtotal']; ?></td>
                    <td><?= $fila['iva']; ?></td>
                    <td><?= $fila['total']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>