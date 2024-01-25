<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<?php include "conexion.php" ?>
	<?php include "cabecera_head.php" ?>
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convecsa - Construcción e Ingeneria</title>
    <link rel="stylesheet" href="css/estilosfotos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		<!--
		.maneja1 {
			height:250px;
	}
		.maneja2 {
			background-color:#FFFFFF;
	}

	.maneja2 a{
		width: 150px;
		height: 35px;
		line-height: 30px;
		background-color: #677192;
		color: #FFF;
		display: block;
		position: relative;
		margin: auto;
		border: solid 2px transparent;
		transition: all .3s linear;
		margin-top: 10px;
	}
	.maneja2:hover a{
		background-color: #FFF;
		color: #677192;
		border: solid 2px #677192;
	}
	.maneja2:hover h3{
		color: #677192;
	}

	-->
	</style>
	
</head>
<body>
	<?php include "conexion.php" ?>
    <header>
	 	<?php   include "cabecera.php" ?>
    </header>
	 
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2>FOTOS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-servicios">
        <div class="container">


          <?php  
          include 'conexion.php';
          $result= mysqli_query($bdCondor,"SELECT *  FROM fotos WHERE tipo = 'main' order by orden DESC, camp0 DESC limit 0,30  ");
          while ( $product=mysqli_fetch_array($result)) {
          ?>    
		       <div class="grid-servicios">
							<?php
							$cat1 = $product['cat1'];
							//echo "cat1-".$cat1;
							if ($cat1=="a1")
							{
							?>
								  <a href="fotosmas2.php?id=<?php echo $product['camp0']; ?>">
							<?php
							}
							Else
							{
							?>
								  <a href="fotosmas2.php?id=<?php echo $product['camp0']; ?>">
							<?php
							}
							?>
						  <img src="img/<?php echo $product['foto']; ?>" alt="">
						  </a>
						<div id="cont-detalla">
							<div class="mini-container2">
									<div class="altura2">
											<h3><?php echo $product["titulo"]; ?></h3>
											<p><?php //echo substr($product["descripcion"],0,180); ?></p>
									</div>
									<?php
									$cat1 = $product['cat1'];
									if ($cat1=="a1")
									{
									?>
										  <a href="fotosmas2.php?id=<?php echo $product['camp0']; ?>">
									<?php
									}
									Else
									{
									?>
										  <a href="fotosmas2.php?id=<?php echo $product['camp0']; ?>">
									<?php
									}
									?>
									Ver Más</a>
							</div>
						</div>
	
				</div>
          <?php 
          }
		  ?>


        </div>
    </section>
    <!-- Fin del Contenedor-servicios -->
    
    
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
		<?php include "pie.php" ?>
    <!-- Fin del Footer -->

    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>