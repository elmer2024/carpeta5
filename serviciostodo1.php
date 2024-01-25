<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIMPA</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<? include "connec.php" ?>
    <header>
		<? include "cabecera.php" ?>
    </header>
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2>SERVICIOS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-servicios">
        <div class="container">


			<?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM nosotros WHERE tipo = 'main' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			?>

			  <div class="grid-servicios">
						<a href="<? echo $row["descrip2"]; ?>"><img src="img/<? echo $row["foto"]; ?>" alt=""></a>
						<div class="con-serv"></div>
						<div id="cont-detalla">
							<div class="mini-container3">
								<h3><? echo $row["titulo"]; ?></h3>
								<a href="<? echo $row["descrip2"]; ?>">Ver Más</a>
							</div>
						</div>
			  </div>

			<?
			}
			?>




        </div>
    </section>
    <!-- Fin del Contenedor-servicios -->



    
    
    
    <!-- Footer -->
		<? include "pie.php" ?>
    <!-- Fin del Footer -->

    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>