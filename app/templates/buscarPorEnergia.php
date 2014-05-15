<?php ob_start() ?>

<form name="formBusqueda" action="index.php?ctl=buscarAlimentosPorEnergia" method="POST">
    <table>
        <tr>
            <td>Energia del alimento:</td>
            <td><input type="text" name="energia" value="<?php echo $params['energia'] ?>"> (puedes utilizar '%' como comod&iacute;n)</td>
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

