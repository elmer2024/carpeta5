<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<?php include "conexion.php" ?>
	<?php include "cabecera_head.php" ?>
    <title><?php //echo $rtitulo; ?>Capacita-t</title>
    <meta name="description" content="<?php echo $rdescrip; ?>">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP" content="<?php echo $rclaves; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/estilos.css">
    <!--link rel="stylesheet" href="css/estiloscorto.css"-->
    <link rel="stylesheet" href="css2/video.css">
    <link rel="stylesheet" href="css2/animate.css">
    <link rel="stylesheet" href="css2/normalize.css">
    <link rel="stylesheet" href="css2/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

	<style type="text/css">
	<!--
.seccion .bloque-sec1 {
    background-color: white;
    
    /*width: 350px; */
    width: 100%; 
    height: 400px; 
}

	ul {
	  	list-style-type: disc;
  		list-style-image: url("flecha.png");
	}
	.aa11 {
			width:100%;
			height:850px;
			background-color:#fff;
			text-align:center;
	}
	.aa22 {
			width:90%;
			background-color:#009999;
			left:100px;
			margin-left:50px;
	}
	.btn-whatsapp {
			display:block;
			width:70px;
			height:70px;
			color#fff;
			position: fixed;
			right:20px;
			bottom:40px;
			border-radius:50%;
			line-height:80px;
			text-align:center;
			z-index:999;
	}
	
	
	.parpadea {
	  
	  animation-name: parpadeo;
	  animation-duration: 2s;
	  animation-timing-function: linear;
	  animation-iteration-count: infinite;
	
	  -webkit-animation-name:parpadeo;
	  -webkit-animation-duration: 2s;
	  -webkit-animation-timing-function: linear;
	  -webkit-animation-iteration-count: infinite;
	}
	
	@-moz-keyframes parpadeo{  
	  0% { opacity: 1.0; }
	  50% { opacity: 0.0; }
	  100% { opacity: 1.0; }
	}
	
	@-webkit-keyframes parpadeo {  
	  0% { opacity: 1.0; }
	  50% { opacity: 0.0; }
	   100% { opacity: 1.0; }
	}
	
	@keyframes parpadeo {  
	  0% { opacity: 1.0; }
	   50% { opacity: 0.0; }
	  100% { opacity: 1.0; }
	}

	@media screen and (max-width: 1200px){
		.aa11 {
				height:800px;
		}
	}

	@media screen and (max-width: 850px){
		.aa11 {
				width:160%;
				height:900px;
				margin-left:-80%;
		}
	}

	@media screen and (max-width: 770px){
		.aa11 {
				width:250%;
				height:750px;
				margin-left:-200px;
		}

	}
	
	-->
	</style>

</head>

<body>

    <header>
		<?php //include "cabecera2.php" ?>
		<?php include "cabecera.php" ?>
    </header>

    <!-- Slider -->
			<?php  include "slider1.php" ?>
    <!-- Fin Del Slider -->

	<div class="btn-whatsapp">
		<?php 
		$rtelefnum1 = substr($rtelefnum,3);  //imprime drid
		?>
		<a href="https://api.whatsapp.com/send?phone=51<?php echo $rtelefnum1; ?>" target="_blank">
		<img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
		</a>
	</div>


    <div id="slider2">
				<img src="img/<?php echo $rfotocel; ?>" alt="">				
	</div>
    
    <section id="cont-presentacion">
        <div class="container">

                <div class="mini-container">
                    <!--h1>PRESENTACIÓN <span class="amarillo">DE LA EMPRESA</span></h1-->
                    <h1><span class="amarillo">Capacita-t especialistas en Gestión del Talento Humano, Gerencia Estratégica y Tecnología</span></h1>
                </div>

					<video width="100%" autoplay muted controls>
						<source src="presen.mp4" type="video/mp4">
						<source src="presen.ogv" type="video/ogg">
					</video>

        </div>
    </section>


    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo2">
        <div class="container">
            <h2>NUESTROS SERVICIOS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Testimonial cliente -->
    <!-- Fin del Testimonial cliente  -->


    <!-- Contenedor-servicios -->
    <section id="con-servicios2">
        <div class="container">


          <!--div class="grid-servicios">
					<a href=""><img src="img/commercial-pest-control.png" alt=""></a>
					<div class="con-serv"></div>
					<div id="cont-detalla">
						<div class="mini-container3">
							<h3>Saneamiento ambiental</h3>
							<a href="servicios.php">Ver Más</a>
						</div>
					</div>
		  </div>

          <div class="grid-servicios">
					<a href=""><img src="img/commercial-pest-control.png" alt=""></a>
					<div class="con-serv"></div>
					<div id="cont-detalla">
						<div class="mini-container3">
							<h3>Limpieza integral</h3>
							<a href="servicios2.php">Ver Más</a>
						</div>
					</div>
		  </div-->



          <?php  
          $result= mysqli_query($bdCondor,"SELECT *  FROM nosotros WHERE tipo = 'main' order by orden DESC limit 0,9");
          while ( $row=mysqli_fetch_array($result)) {
          ?>                      


	          <div class="grid-servicios">
					<a href="serviciostodo3b.php?id=<?php echo $row['camp0']; ?>">
					<img src="img/<?php echo $row['foto']; ?>" alt=""></a>
					<div class="con-serv"></div>
					<div id="cont-detalla">
						<div class="mini-container3">
							<h3><?php echo $row["titulo"]; ?></h3>
							<a href="serviciostodo3b.php?id=<?php echo $row['camp0']; ?>">Ver Más</a>
						</div>
					</div>
			  </div>



            <?php 
          }
		  ?>



          <?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2 FROM nosotros WHERE tipo = 'c1' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			}
			?>
      </div>
    </section>
    <!-- Fin del Contenedor-servicios -->

    
    <!-- Clientes -->
    <section id="con-clientes">
        <div class="container">
            <div class="mini-container">
                <h3>ALIADOS ESTRATEGICOS Y CLIENTES</h3>
					<?
					//$result = mysql_query("SELECT camp0, tipo, titulo, descripcion, foto, rubro FROM nosotros WHERE camp0 = '36' limit 0,15", $dbh);
					  //$result1 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
					  //$rfoto = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
					  //$rdescrip = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
					?>

                <p><? //echo $rdescrip; ?></p>
                

					<?
		          	$result= mysqli_query($bdCondor,"SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'e1' order by orden DESC limit 0,80 ");
          			while ( $row=mysqli_fetch_array($result)) 
					//$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'e1' order by orden DESC limit 0,80 ";
					//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
					//$result = mysql_query($cadenaSQL, $dbh);
					//while($row = mysql_fetch_array($result))
					{
					?>
						<div class="fr-4">
							<div class="mini-container">
								<img src="img/<? echo $row["foto"]; ?>" alt="">
								<!--img src="img/clientes/logo1.png" alt=""-->
							</div>
						</div>
					<?
					}
					?>


            </div>
        </div>
    </section>
    <!-- Fin del Cliente -->
    
    
    <!-- Contac -->
    <section id="cont-tac">
        <div class="container">
            <div class="mini-container">
                <p>
¡Somos una plataforma que da soporte a los emprendedores y empresarios a crecer!
				</p>
                <a href="contacto.php">CONTÁCTENOS<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- Fin del Contac -->
    
    <!-- Footer -->
		<?php include "pie.php" ?>
    <!-- Fin del Footer -->

    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/testimonial.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>