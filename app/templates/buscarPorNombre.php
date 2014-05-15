<?php ob_start() ?>

<form name="formBusqueda" action="index.php?ctl=buscar" method="POST">
    <table>
        <tr>
            <td>nombre alimento:</td>
            <td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>"> (puedes utilizar '%' como comod&iacute;n)</td>
            <td><input type="submit" value="buscar"></td>
        </tr>
    </table>
</form>


<?php if (count($params['resultado']) > 0): ?>
    <table>
        <tr>
            <th>alimento (por 100g)</th>
            <th>energ&iacute;a (Kcal)</th>
            <th>proteina (g)</th>
            <th>Hidratos de Carbono (g)</th>
            <th>fibra (g)</th>
            <th>grasa (g)</th>
        </tr>
        <?php foreach ($params['resultado'] as $alimento) : ?>
            <?php include 'listarAlimentos.php' ?>
        <?php endforeach; ?>

    </table>
<?php endif; ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>

