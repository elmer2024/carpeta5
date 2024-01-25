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
            <h2>NOSOTROS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Nosotros -->
    <section id="contenedor-nosotros">
        <div class="container">
            <div class="nosotros-left">
                <div class="mini-container">
                    <div id="acordeon">
                        <div class="acordeon">
                            <h1 class="btn"> Misión <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?
							//mision
							$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '2' order by orden DESC, camp0 DESC ";
							$result = mysql_query($cadenaSQL, $dbh);
							$rdescrip = mysql_result($result, 0, 4 );   
							?>
                                <p><? echo $rdescrip; ?></p>
                            </div>
                        </div>
                        
                        <div class="acordeon">
                            <h1 class="btn"> Visión <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?
							//vision
							$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '3' order by orden DESC ";
							$result = mysql_query($cadenaSQL, $dbh);
							$rdescrip = mysql_result($result, 0, 4 );   
							?>
                                <p><? echo $rdescrip; ?></p>
                            </div>
                        </div>
                        
                        <div class="acordeon">
                            <h1 class="btn"> Valores <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?
							//valores
							$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '4' order by orden DESC ";
							$result = mysql_query($cadenaSQL, $dbh);
							$rdescrip = mysql_result($result, 0, 4 );   
							?>
                                <p><? echo $rdescrip; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nosotros-right">
				<?
				//valores
				$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '5' order by orden DESC ";
				$result = mysql_query($cadenaSQL, $dbh);
				$rdescrip = mysql_result($result, 0, 3 );   
				?>
                <img src="img/<? echo $rdescrip; ?>" alt="">
                <!--img src="img/nosotros.jpg" alt=""-->
            </div>
        </div>
    </section>
     <!-- Fin de Nosotros -->
     
     <!-- Contador -->
     <section id="con-contador">
         <div class="opaco">
             <div class="container">
                 <div class="grid-contador">
                     <p data-valor="250">0</p>
                     <i class="fa fa-building" aria-hidden="true"></i>
                     <h5>PROYECTOS COMPLETADOS</h5>
                 </div>
                 <div class="grid-contador">
                     <p data-valor="123">0</p>
                     <i class="fa fa-users" aria-hidden="true"></i>
                     <h5>CLIENTES</h5>
                 </div>
                 <div class="grid-contador">
                     <p data-valor="22">0</p>
                     <i class="fa fa-user-plus" aria-hidden="true"></i>
                     <h5>TRABAJADORES</h5>
                 </div>
             </div>
         </div>
     </section>
     <!-- Fin del Contador -->
     
    <!-- Equipo -->
    <section id="con-staff">
        <div class="container">
            <h3>NUESTRO EQUPO</h3>
            <br>


					<?
					$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, rubro FROM nosotros WHERE tipo = 'b1' order by orden DESC, camp0 DESC ";
					//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
					$result = mysql_query($cadenaSQL, $dbh);
					while($row = mysql_fetch_array($result))
					{
					?>
						<div class="gr_4">
							<img src="img/<? echo $row["foto"]; ?>" alt="">
							<div class="con-tapa"></div>
							<div id="con-detalles1">
								<div class="mini-container">
									<h4><? echo $row["titulo"]; ?></h4>
									<p><? echo $row["rubro"]; ?></p>
								</div>
							</div>
						</div>
					<?
					}
					?>


        </div>
    </section>
    <!-- Fin del Equipo -->
    
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
    <script type="text/javascript" src="js/acordeon.js"></script>
    <script type="text/javascript" src="js/contador.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>