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
			<?php
			$id2=$_GET["id"];
			$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM fotos WHERE camp0 = '$id2' order by camp0 limit 0,8";
			$exect = mysqli_query($bdCondor,$sql);
			while ($row = mysqli_fetch_array($exect)) {
				$titulo = $row[2];
				$rfoto2 = $row[3];
				$descripcion = $row[4];
			}
			?>
            <h2>FOTOS - <?php echo $titulo ?></h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-servicios">
        <div class="container">


          <?php  
          include 'conexion.php';
          $result= mysqli_query($bdCondor,"SELECT camp0, tipo, titulo, foto, descripcion, orden FROM fotos WHERE tipo like 'c%' AND id2= '$id2' order by orden DESC");
          while ( $product=mysqli_fetch_array($result)) {
          ?>    
		       <div class="grid-servicios">

					<div class="maneja1">

						  <a href="img/<?php echo $product['foto']; ?>">
						  <img src="img/<?php echo $product['foto']; ?>" alt="">
						  </a>
							<div class="con-tapa">
								<div class="cont-text">
									<h4><a href="serviciostodo4b.php?id=<?php echo $row["camp0"]; ?>"><?php //echo $row["titulo"]; ?></a></h4>
									<p><?php echo $row["descripcion"]; ?></p>
								</div>
							</div>
					</div>
					<div class="maneja2">
							<div id="cont-detalla">
								<div class="mini-container">
									<h3><?php //echo $product['descripcion']; ?></h3>
								</div>
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