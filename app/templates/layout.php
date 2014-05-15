<!DOCTYPE HTML>

    <head>
        <title>Informaci&oacute;n Alimentos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/' . Config::$mvc_vis_css ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/' . Config::$mvc_vis_ventanasmodalescss ?>">

	<script type="text/javascript" src="<?php echo 'js/' . Config::$mvc_vis_jquery ?>"></script>
	<script type="text/javascript" src="<?php echo 'js/' . Config::$mvc_vis_cajamodal ?>"></script>

    </head>
    <body>
        <div id="cabecera">
            <h1>Informaci&oacute;n de alimentos</h1>
        </div>
        <div id="menu">
            <hr/>
            <a href="index.php?ctl=inicio">inicio</a> |
            <a href="index.php?ctl=listar">ver alimentos</a> |
            <a href="index.php?ctl=insertar">insertar alimento</a> |
            <a href="index.php?ctl=buscar">buscar por nombre</a> |
            <a href="index.php?ctl=buscarAlimentosPorEnergia">buscar por energia</a> |
            <a href="index.php?ctl=buscarAlimentosCombinada">b&uacute;squeda combinada</a>
            <hr/>
        </div>
        <div id=ido">
            <?php echo $contenido ?>
        </div>
        <div id="pie">
            <hr/>
            <div align="center">- pie de p&aacute;gina -</div>
        </div>
    </body>
</html>