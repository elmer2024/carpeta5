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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
</head>
<body>
	<? include "connec.php" ?>
    <div id="slider">
        <div id="mover">


			<?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'g1' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			?>
				<article>
					<img src="img/<? echo $row["foto"]; ?>" alt="">
					<div class="g_50">
						<div class="mini-container">
							<h2><? echo $row["titulo"]; ?></h2>
							<p><? echo $row["descripcion"]; ?></p>
							<a href="#">Ver Mas</a>                    </div>
					</div>
			  </article>
			<?
			}
			?>


        </div>
        <div id="anterior" class="wow fadeInLeft">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div id="siguiente" class="wow fadeInRight">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>


</body>
</html>