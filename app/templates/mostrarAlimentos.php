<?php ob_start() ?>
<table>
    <tr>
        <th>alimento (por 100g)</th>
        <th>energ&iacute;a (Kcal)</th>
        <th>proteina (g)</th>
        <th>Hidratos de Carbono (g)</th>
        <th>fibra (g)</th>
        <th>grasa (g)</th>
    </tr>
    <?php foreach ($params['alimentos'] as $alimento) : ?>
        <?php include 'listarAlimentos.php' ?>
    <?php endforeach; ?>
</table>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>

