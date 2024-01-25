    <?
	//$pcamp0=$_GET["id"];
	$url2=$_GET["id"];
	include "connec.php" 
	?>
	<?
//					$result = mysql_query("SELECT camp0, tipo, titulo, descripcion, foto, rubro FROM nosotros WHERE camp0 = '$pcamp0' limit 0,15", $dbh);
	$result = mysql_query("SELECT camp0, tipo, titulo, descripcion, foto, rubro FROM nosotros WHERE url2 = '$url2' limit 0,15", $dbh);
	$result = mysql_query("SELECT camp0, tipo, titulo, descripcion, foto, rubro FROM nosotros WHERE camp0 = '$url2' limit 0,15", $dbh);
	$filas = mysql_num_rows($result);
	if ($filas=="")
	{
	  print "no existen registros";
	}
	Else
	{
	  $rtitulo = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
	  $rfoto2 = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
	  $rdescrip2 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
	}
//echo "SELECT camp0, tipo, titulo, descrip, foto, rubro FROM nosotros WHERE camp0 = '$pcamp0' limit 0,15";				
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convecsa - <? echo $rtitulo; ?></title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <header>
		<? include "cabecera.php" ?>
    </header>

    
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
            


			<?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM nosotros WHERE id2 = '$id2' order by orden DESC ";
//			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2 FROM nosotros WHERE tipo = 'c1' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			?>
				<div class="grid-servicios">
					<a href="servicios1a.php?id=<? echo $row["url2"]; ?>">
					<img src="img/<? echo $row["foto"]; ?>" alt="">
					</a>
					<div id="cont-detalla">
						<div class="mini-container">
							<h3><? echo $row["titulo"]; ?></h3>
						</div>
					</div>
				</div>

			<?
			}
			?>
            
            <br>
            <br>
          <img src="img/<? echo $rfoto2; ?>" alt="">        </div>
    </section>
    
    
    
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