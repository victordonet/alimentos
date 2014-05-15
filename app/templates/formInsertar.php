<?php ob_start() ?>

<?php if (isset($params['mensaje'])) : ?>
    <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
    <?php endif; ?>
<br/>
<form name="formInsertar" action="index.php?ctl=insertar" method="POST">
    <table>
        <tr><td colspan="2" align="center">* Los valores deben referirse a 100 g del alimento</td></tr>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>" /></td>
        </tr>
        <tr>
            <th>Energ&iacute;a (Kcal)</th>
            <td><input type="text" name="energia" value="<?php echo $params['energia'] ?>" /></td>
        </tr>
        <tr>
            <th>Proteina (g)</th>
            <td><input type="text" name="proteina" value="<?php echo $params['proteina'] ?>" /></td>
        </tr>
        <tr>
            <th>H. de carbono (g)</th>
            <td><input type="text" name="hc" value="<?php echo $params['hc'] ?>" /></td>
        </tr>
        <tr>
            <th>Fibra (g)</th>
            <td><input type="text" name="fibra" value="<?php echo $params['fibra'] ?>" /></td>
        </tr>
        <tr>
            <th>Grasa total (g)</th>
            <td><input type="text" name="grasa" value="<?php echo $params['grasa'] ?>" /></td>
        </tr>
        <tr><td colspan="2" align="center"><input type="submit" value="insertar" name="insertar" /></td></tr>

    </table>
    
</form>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>


