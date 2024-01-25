<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convecsa - Construcción e Ingeneria</title>
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
            <h2>PORTAFOLIO</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Portafolio -->
    <secion id="con-portafolio">
        <div class="container">

					<?
					$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, rubro FROM nosotros WHERE tipo = 'd1' order by orden DESC, camp0 DESC ";
					//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
					$result = mysql_query($cadenaSQL, $dbh);
					while($row = mysql_fetch_array($result))
					{
					?>
					   <div class="g4_r">
					   aaa
							<img src="img/<? echo $row["foto"]; ?>" alt="">
							bbb
							<div class="con-tapa">
								cccc<div class="cont-text">
									dddd<h4><a href="#"><? echo $row["titulo"]; ?></a></h4>
									<p><? echo $row["rubro"]; ?></p>
								</div>
							</div>
						</div>

					<?
					}
					?>



        </div>
    </secion>
    <!-- Fin del Portafolio -->
    
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