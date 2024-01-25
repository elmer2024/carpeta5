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
    <?
	$pcamp0=$_GET["id"];
	include "connec.php" 
	?>
    <header>
		<? include "cabecera.php" ?>
    </header>

					<?
					$sql = "SELECT camp0, tipo, titulo, descrip2, foto2, rubro FROM nosotros WHERE camp0 = '$pcamp0' limit 0,15";
					$exect = mysqli_query($mysqli,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$rtitulo = $row[2];
						$rfoto2 = $row[4];
						$rdescrip2 = $row[3];
					}

					?>
    
     <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2><? echo $rtitulo; ?></h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <section id="con-det-servicios">
      <div class="container">
          <p><? echo nl2br ($rdescrip2); ?></p>
            
            
            <br>
            <br>
          <img src="img/<? echo $rfoto2; ?>" alt="">        </div>
    </section>
    
    <!-- Contac -->
    <section id="cont-tac">
        <div class="container">
            <div class="mini-container">
                <p>ESTAMOS LISTOS PARA CONSTRUIR SU SUEÑO DIGANOS MÁS SOBRE SU PROYECTO</p>
                <a href="contacto.php">CONTÁCTENOS<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- Fin del Contac -->
    
    
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