<?php ob_start() ?>

<form name="formBusqueda" action="index.php?ctl=buscarAlimentosCombinada" method="POST">
    <table>
        <tr><td colspan="2" align="center">(puedes utilizar '%' como comod&iacute;n)</td></tr>
        <tr>
            <th align="right">Nombre alimento:</th>
            <td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>"></td>
        </tr>
        <tr>
            <th align="right">Energ&iacute;a del alimento:</th>
            <td><input type="text" name="energia" value="<?php echo $params['energia'] ?>"></td>
        </tr>
        <tr>
            <th align="right">Proteina del alimento:</th>
            <td><input type="text" name="proteina" value="<?php echo $params['proteina'] ?>"></td>
        </tr>
        <tr>
            <th align="right">Carbohidratos del alimento:</th>
            <td><input type="text" name="hidratocarbono" value="<?php echo $params['hidratocarbono'] ?>"></td>
        </tr>
        <tr>
            <th align="right">Fibra del alimento:</th>
            <td><input type="text" name="fibra" value="<?php echo $params['fibra'] ?>"></td>
        </tr>
        <tr>
            <th align="right">Grasa del alimento:</th>
            <td><input type="text" name="grasatotal" value="<?php echo $params['grasatotal'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="buscar"></td>
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

