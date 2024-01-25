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
	<style type="text/css">
	<!--
	br {
	  padding-left: 25px;
	  height:10px;
	}
	ul {
	  font-size:14px;
	  /*list-style-type: upper-roman;*/
	  list-style-position: inside;
	  padding-left: 10px;
	  list-style-type: none;
	}
	
	li {
	  line-height: 15px;
	}
	
	ul li{
		padding-left: 24px;
	}

	.par1{
		text-align:justify;
		padding-right: 24px;
		margin-right:10%;
	}
	.ulazul{
		background-image: url(bola.png);
		background-repeat: no-repeat;
		background-position: 1px 11px;
		padding-left: 20px;
		padding-bottom:15px;
		list-style-type:circle;
		text-align:justify;
		margin-right: 10%;
		line-height:27px;
		font-size:20px;
	}
	.ulazul1{
		background-image: url(bola5.png);
		background-repeat: no-repeat;
		background-position: 1px 6px;
		padding-left: 25px;
		padding-bottom:15px;
		text-align:justify;
		margin-right: 10%;
		line-height:27px;
		font-size:20px;
	}
	.ulrojo{
		background-image: url(fle5.png);
		background-repeat: no-repeat;
		background-position: 0px 1px;
		padding-left: 24px;
		padding-bottom:15px;
	}

	.maneja1 {
		height:300px;
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

	.add1tag {
		width:auto;
		height:auto;
		background-color: #992844;
		border: 1px solid rgba(0, 0, 0, .2);
		border-radius: 5px;
		cursor: pointer;
		padding: 10px;
		font-weight:bold;
		text-decoration: none;
		left: 0px;
		bottom: 10px;
		display:inline-table;
		margin-bottom:10px;
	
		font-weight:normal;
		font-size:14px;
		color:#ffffff;
		z-index:11;
	}
	.add1tag:hover {
		background-color:#BBBBBB;
		text-decoration: none;
	}

	@media screen and (max-width: 850px){
		.par1{
			text-align:justify;
			margin-right:1%;
		}
	}

	@media screen and (max-width: 770px){
	}

	-->
	</style>
	
</head>
<body>
	<?php
	$id2=$_GET["id"];
	include "conexion.php" 
	?>
			<?php
			$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2, cat1, cat2, cat3, precio, foto2 FROM nosotros WHERE camp0 = '$id2' order by camp0 limit 0,8";
			$exect = mysqli_query($bdCondor,$sql);
			while ($row = mysqli_fetch_array($exect)) {
				//echo $row[4].' '.$row[5];
				$titulo = $row[2];
				$rfoto2 = $row[3];
				$rdescrip2 = $row[4];
				$rdescrip20 = $row[7];
				$cat2 = $row[9];
				$precio = $row[11];
				$rfoto3 = $row[12];
			}
			//echo "<br>foto2 ".$rfoto3;


$cadena = $cat2;
$buscar = "b1";
$resultado = strpos($cadena, $buscar);
if($resultado !== FALSE){
    //echo "La subcadena '$buscar' fue encontrada dentro de la cadena '$cadena' en la posición: '$resultado'";
	$cat2a = "Sol y playa";
}

$buscar = "b2";
$resultado = strpos($cadena, $buscar);
if($resultado !== FALSE){
	$cat2a = "Clasicos";
}

$buscar = "b3";
$resultado = strpos($cadena, $buscar);
if($resultado !== FALSE){
	$cat2a = "Tursimo de naturaleza";
}

			?>
    <header>
	 	<?php   include "cabecera.php" ?>
    </header>
	 
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2>
			<?php 
				if ($id2=="224")
				{
				$titulo =  "Coaching <br> ICI Perú <br><br>";
				}
			echo $titulo 
			?>
			</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-servicios">

      <div class="nosotros3-left">
            <!--h2><?php echo $titulo ?></h2>
			<br><br-->

      	<div class="par1">
	        <?php echo nl2br ($rdescrip2); ?>
		</div>


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
				if ($id2!="224")
				{
				?>
				  <img src="img/<? echo $rfoto2; ?>" alt="">        
			  <?php
				}
			}
			?>


			<div class="mini-container">
                    <div id="acordeon">
                    </div>
        </div>			

					<?php
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros1 WHERE tipo like 'c%' AND id2= '$id2' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
					?>
                        <div class="acordeon">
                            <h1 class="btn"> <?php echo $row["titulo"]; ?> <i class="fa fa-chevron-down" aria-hidden="true"></i></h1>
                            <div class="contenido">
                                <p>
      	<div class="par1">
								<?php 
								$descrip3 = $row["descripcion"]; 
								echo nl2br ($descrip3);
								?>
        </div>			
								</p>
                            </div>
                        </div>


					<?php
					}
					?>








<br>		
	<?php 
	$rtelefnum1 = substr($rtelefnum,3);  //imprime drid
	?>
	 <!--a class="add1tag" href="https://api.whatsapp.com/send?phone=51<?php echo $rtelefnum1; ?>" target="_blank" >Consultar</a--> 

	 <a class="add1tag" href="contacto1.php?id=<?php echo $id2 ?>" >Reservar</a>  
  	 
<A HREF="javascript:history.back()"> <font color="#2E2F8D"> <&nbsp;&nbsp;Volver Atrás</font> </A>
	&nbsp;  
	 <br>
	 </div>

        <div class="nosotros3-right">
		  <?php
			if ($rfoto3=="")
			{
				$rfoto3=$rfoto2;
			}
			//echo "<br>foto1 ".$rfoto2;
			//echo "<br>foto2 ".$rfoto3;
			?>
			<img src="img/<?php echo $rfoto3 ?>" alt="">
		</div>

    </section>
    <!-- Fin del Contenedor-servicios -->
    
    
    <!-- Contac -->
    <section id="cont-tac">
        <div class="container">
            <div class="mini-container">
                <p>
Consulta el curso o especialización que quieres llevar
				</p>
                <a href="contacto.php">CONTÁCTENOS<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- Fin del Contac -->
    
    
    <!-- Footer -->
		<?php include "pie1.php" ?>
    <!-- Fin del Footer -->

    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/acordeon.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>