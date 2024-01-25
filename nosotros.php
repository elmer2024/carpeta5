<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<?php include "conexion.php" ?>
	<?php include "cabecera_head.php" ?>
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacita-t</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

	<style type="text/css">
	<!--
	.acordeon2 {
		font-size: 14px;
		font-weight: 400;
		line-height: 22px;
		text-align: justify;

	}
	-->
	</style>

</head>
<body>
	<?php include "conexion.php" ?>
    <header>
		<?php include "cabecera.php" ?>
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

                        <div class="acordeon2">

CAPACITA-T, es una organización que brinda los servicios de consultoría, asesoría, capacitación e implementación de proyectos empresariales, tecnológicos y sociales en el ámbito local, nacional e internacional.  
<br>
La supervivencia de las organizaciones depende mucho de las personas que la conforman, las herramientas tecnológicas que utilizan y de sus estrategias las cuales aseguren su existencia. Dentro de nuestras fortalezas contamos con un equipo de consultores multidisciplinario de primer nivel que dará soporte a lo anteriormente descrito. Nos encontramos preparados para enfrentar los retos que se presentan día a día y nos caracterizamos por brindar resultados acordes a las exigencias de la era actual.
                        </div>



                    <div id="acordeon">

                        <div class="acordeon">
                            <h1 class="btn"> Misión <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?php
							//mision
							$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '2' order by orden DESC, camp0 DESC ";
							$exect = mysqli_query($bdCondor,$sql);
							while ($row = mysqli_fetch_array($exect)) {
								$rdescrip = $row[4];
							}

							?>
                                <p><?php echo $rdescrip; ?></p>
                            </div>
                        </div>
                        
                        <div class="acordeon">
                            <h1 class="btn"> Visión <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?php
							//vision
							$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '3' order by orden DESC, camp0 DESC ";
							$exect = mysqli_query($bdCondor,$sql);
							while ($row = mysqli_fetch_array($exect)) {
								$rdescrip = $row[4];
							}
							?>
                                <p><?php echo $rdescrip; ?></p>
                            </div>
                        </div>
                        
                        <div class="acordeon">
                            <h1 class="btn"> Valores <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
							<?php
							//valores
							$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '4' order by orden DESC, camp0 DESC ";
							$exect = mysqli_query($bdCondor,$sql);
							while ($row = mysqli_fetch_array($exect)) {
								$rdescrip = $row[4];
							}
							?>
                                <p><?php echo nl2br ($rdescrip); ?></p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="nosotros-right">
				<?php
				//valores
							$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '5' order by orden DESC, camp0 DESC ";
							$exect = mysqli_query($bdCondor,$sql);
							while ($row = mysqli_fetch_array($exect)) {
								$rdescrip = $row[3];
							}
				?>
                <img src="img/<?php echo $rdescrip; ?>" alt="">
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
                     <p data-valor="140">0</p>
                     <i class="fa fa-building" aria-hidden="true"></i>
                     <h5>PROYECTOS COMPLETADOS</h5>
                 </div>
                 <div class="grid-contador">
                     <p data-valor="110">0</p>
                     <i class="fa fa-users" aria-hidden="true"></i>
                     <h5>CLIENTES</h5>
                 </div>
                 <div class="grid-contador">
                     <p data-valor="15">0</p>
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
            <h3>TALENTO HUMANO</h3>
            <br>


					<?

					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, rubro FROM nosotros WHERE tipo = 'b1' order by orden DESC, camp0 DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
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
                <p>
¡Somos una plataforma que da soporte a los emprendedores y empresarios a crecer!				</p>
                <a href="contacto.php">CONTÁCTENOS<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- Fin del Contac -->
    
    <!-- Footer -->
		<?php include "pie.php" ?>
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