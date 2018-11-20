<html lang="es">
    <head>
        <title>
            TestPSelecons
        </title>
        <!-- Scripts ---------------------------------------------->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <script type="text/javascript" src='js/main.js'></script>
	<script type="text/javascript" src='js/constantes.js'></script>
	<script type="text/javascript" src='js/funciones.js'></script>
        <!-- /Scripts --------------------------------------------->

        <!-- Estilos ---------------------------------------------->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-grid.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css" />

        <link rel="stylesheet" href="css/style.css" />
	<link rel="icon" href="images/favicon.ico" />
        <!-- /Estilos --------------------------------------------->

        <!-- Meta tags -------------------------------------------->
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="TestPSelecons">
	<meta name="keywords" content="Test psicológicos, libros psicología">
	<meta name="author" content="Jorge Silva Borda">
        <!-- /Meta tags ------------------------------------------->
    </head>

    <body>
	<script type="text/javascript">
            $(document).ready(function () {
		$('.modulo').hide();
                cargar("principal");
            });
	</script>
        <div class="container-fluid">
	    <?php
	    include "mod/menu.php";
	    ?>
	    <div id="contenido" class="container-fuid" style="display: none;">
		<?php
		include "mod/principal.php";
		include "mod/nosotros.php";
		include "mod/servicios.php";
		include "mod/productos.php";
		?>
	    </div>
        </div>
    </body>
</html>
