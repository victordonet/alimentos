<?php ob_start() ?>
<h3>
    <a href="http://es.wikipedia.org/wiki/<?php echo $params['nombre'] ?>" class="clsVentanaIFrame clsBoton" rel="Wikipedia"><?php echo $params['nombre'] ?></a>
</h3>

<table border="1">
    <tr>
        <td>Energ&iacute;a</td>
        <td><?php echo $alimento['energia'] ?></td>
    </tr>
    <tr>
        <td>Proteina</td>
        <td><?php echo $alimento['proteina'] ?></td>
    </tr>
    <tr>
        <td>Hidratos de Carbono</td>
        <td><?php echo $alimento['hidratocarbono'] ?></td>
    </tr>
    <tr>
        <td>Fibra</td>
        <td><?php echo $alimento['fibra'] ?></td>
    </tr>
    <tr>
        <td>Grasa total</td>
        <td><?php echo $alimento['grasatotal'] ?></td>
    </tr>
</table>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
