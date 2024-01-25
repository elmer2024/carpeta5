<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convecsa - Construcción e Ingeneria</title>
    <link rel="stylesheet" href="css/estilosx.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<style> 
		ul {
		  list-style-type: disc;
		  font-size:16px;
		}
		.clase1 {
			color:#009966;
			font-size:x-large;
			padding-left: 15px;
			margin-left:25px;
		}
		.clase2 {
		  color:#333;
		  font-size:x-large;
		}


</style>

<style type="text/css">
<!--
.add1tag {
	width:auto;
	height:auto;
	background-color: #BBBBBB;
	border: 1px solid rgba(0, 0, 0, .2);
	border-radius: 5px;
	cursor: pointer;
	padding: 10px;
	font-weight:bold;
	text-decoration: none;
    left: 0px;
    bottom: 10px;
    top: 65%;
	left:50%;
	position:absolute;
	display:inline-table;
	margin-bottom:10px;

	font-weight:normal;
	font-size:14px;
	color:#ffffff;
	z-index:11;
}
.add1tag:hover {
	background-color:#992844;
	text-decoration: none;
}
.add2tag {
	width:auto;
	height:auto;
	border: 1px solid rgba(0, 0, 0, .2);
	border-radius: 12px;
	padding: 10px;
	font-weight:bold;
	text-decoration: none;
    bottom: 10px;
    top: 25%;
	left:40%;
	position:absolute;
	display:inline-table;
	margin-bottom:10px;
	text-align:center;

	font-weight:bold;
	font-size:28px;
	color:#0066CC;
	color:#ffffff;
	z-index:11;
}
.add2tag:hover {
	color:#FF9900;
	text-decoration: none;
}
.add3tag {
	width:auto;
	height:auto;
	border: 0px;
	border-radius: 5px;
	cursor: pointer;
	padding: 4px;
	font-weight:bold;
	text-decoration: none;
    left: 0px;
    bottom: 10px;
    top: 65%;
	left:30%;
	position:absolute;
	display:inline-table;
	margin-bottom:10px;

	font-weight:normal;
	font-size:14px;
	color:#ffffff;
	z-index:11;
}
.add3tag:hover {
	background-color:#992844;
	text-decoration: none;
}

.add4tag {
	border: 0px;
	border-radius: 5px;
	padding: 8px;
	width: 140px;
}
@media screen and (max-width: 770px){

}
@media screen and (max-width: 600px){
	.add3tag {
		left:20%;
	    top: 45%;
	}
	.add1tag {
		left:60%;
	    top: 45%;
	}
	.add2tag {
		top: 25%;
		left:30%;
	}
}

-->
</style>



</head>
<body>
	<?php
	$id2=$_GET["id"];
	include "conexion.php" 
	?>
    <header>
		<?php include "cabecera.php" ?>
    </header>
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo2">
        <div class="container">

			<?php
			$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM nosotros WHERE camp0 = '$id2' order by camp0 limit 0,8";
			$exect = mysqli_query($bdCondor,$sql);
			while ($row = mysqli_fetch_array($exect)) {
				//echo $row[4].' '.$row[5];
				$titulo = $row[2];
				$rfoto2 = $row[3];
				$rdescrip2 = $row[4];
			}
			?>

	 <a class="add1tag" href="contacto1.php" >RESERVAR</a>          
	 <span class="add2tag" href="https://www.netlima.com/" ><?php echo $titulo ?></span>          

		<img src="img/<?php echo $rfoto2 ?>" alt="">
            <!--h2><?php echo $titulo ?></h2-->
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-det-servicios">
      <div class="container">


        <p><?php echo nl2br ($rdescrip2); ?></p>


			<?php 
			$hayfotos = "";
			$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM nosotros WHERE camp0 = '$id2'   ";
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo like 'c%' AND id2= '$id2' order by orden DESC ";
			$exect = mysqli_query($bdCondor,$sql);
			while ($row = mysqli_fetch_array($exect)) {
				$hayfotos = "si";
				?>
				<div class="grid-servicios">
					<a href="servicios1a.php?id=<?php echo $row["camp0"]; ?>&url=<?php echo $row["url2"]; ?>">
					<img src="img/<?php echo $row["foto"]; ?>" alt="">
					</a>
					<div id="cont-detalla">
						<div class="mini-container">
							<h3><?php echo $row["titulo"]; ?></h3>
						</div>
						
					</div>
				</div>

				<?php
			}
			?>


            <br>
            <br>
			<?php
			if ($hayfotos=="")
			{
			?>
		        <img src="img/<? echo $rfoto2; ?>" alt="">        
			<?php
			}
			?>
	  </div>
    </section>
    <!-- Fin del Contenedor-servicios -->
    
    
    
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