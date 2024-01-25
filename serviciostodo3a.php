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
		.maneja1 {
			height:200px;
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

	.categ1 {
		width:90%;
		height:auto;
		background-color: #992844;
		border: 1px solid rgba(0, 0, 0, .2);
		border-radius: 10px 10px 0px 0px;
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
	.categ1:hover {
		background-color:#BBBBBB;
		text-decoration: none;
	}

	.categ1f {
		width:50%;
		height:auto;
		background-color: #992844;
		border: 1px solid rgba(0, 0, 0, .2);
		border-radius: 10px 10px 10px 10px;
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
	.categ1f:hover {
		background-color:#BBBBBB;
		text-decoration: none;
	}

	-->
	</style>
	
</head>
<body>
	<?php 
	$id2=$_GET["id"];
	$cat1=$_GET["cat1"];
	$cat2=$_GET["cat2"];
	$cat3=$_GET["cat3"];
	$check1a=$_GET["check1a"];
	$check2a=$_GET["check2a"];
	$check3a=$_GET["check3a"];
	$check4a=$_GET["check4a"];
	$check5a=$_GET["check5a"];

	$nro1= 0;
	if ($check1a==""){  
	$check1a = "xxx";	
	$nro1 = $nro1+1;
	}
	if ($check2a==""){
	  $check2a = "xxx";	
	$nro1 = $nro1+1;
	 }
	if ($check3a==""){
	  $check3a = "xxx";	
	$nro1 = $nro1+1;
	 }
	if ($check4a==""){
	  $check4a = "xxx";	
	$nro1 = $nro1+1;
	  }
	if ($check5a==""){
	  $check5a = "xxx";	
	$nro1 = $nro1+1;
	}
	//echo 	"nro1".$nro1;

	if ($nro1=="5"){
		$check1a = "";	
	 }


	$check1=$_GET["check1"];
	//$check2=$_GET["check2"];
	//$check3=$_GET["check3"];
	//if ($check1==""){  $check1 = "xxx";	}
	//if ($check2==""){  $check2 = "xxx";	}
	//if ($check3==""){  $check3 = "xxx";	}

	include "conexion.php"; 

	$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2, descrip2 FROM nosotros WHERE camp0 = '$id2' ";
	$exect = mysqli_query($bdCondor,$sql);
	while ($row = mysqli_fetch_array($exect)) {
		$titu = $row['titulo'];
	}
	?>
    <header>
	 	<?php   include "cabecera.php" ?>
    </header>
	 
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2><?php echo $titu; ?></h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Contenedor-servicios -->
    <section id="con-servicios">

        <div class="nosotros2-left">
		 	<?php   include "categorias1.php" ?>
        </div>
        <div class="nosotros2-right">
          <?php 
		  //echo "SELECT *  FROM nosotros WHERE cat1 like '$cat1%' AND cat2 like '$cat2%' AND cat3 like '$cat3%' order by camp0 DESC limit 0,30"; 
		  //$STR = "SELECT *  FROM nosotros WHERE cat1 like '$cat1%' AND ";
		  $STR = "SELECT *  FROM nosotros WHERE ";
//		  $STR = $STR." cat1 like '%$check1a%' OR cat1 like '%$check2a%' OR cat1 like '%$check3a%' OR";
//		  $STR = $STR." cat2 like '%$check1%' OR cat2 like '%$check2%' OR cat2 like '%$check3%'";

		  $STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat1 like '%$check1a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat1 like '%$check2a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat1 like '%$check3a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat1 like '%$check4a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat1 like '%$check5a%' AND cat2 like '%$check1%'";

		  //$STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat2 like '%$check1%' OR ";
		  //$STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat2 like '%$check2%' OR ";
		  //$STR = $STR." tipo like 'c%' AND id2= '$id2' AND cat2 like '%$check3%' ";

		  $STR = $STR." order by camp0 DESC limit 0,30";

		if ($id2=="")
		{  
		  $STR = "SELECT *  FROM nosotros WHERE ";
		  $STR = $STR." tipo like 'c%' AND cat1 like '%$check1a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND cat1 like '%$check2a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND cat1 like '%$check3a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND cat1 like '%$check4a%' AND cat2 like '%$check1%' OR ";
		  $STR = $STR." tipo like 'c%' AND cat1 like '%$check5a%' AND cat2 like '%$check1%' ";

		  //$STR = $STR." tipo like 'c%' AND cat2 like '%$check1%' OR ";
		  //$STR = $STR." tipo like 'c%' AND cat2 like '%$check2%' OR ";
		  //$STR = $STR." tipo like 'c%' AND cat2 like '%$check3%' ";
		  $STR = $STR." order by camp0 DESC limit 0,30";
		}




		  //$STR = $STR." AND cat3 like '$cat3%' order by camp0 DESC limit 0,30";
		  //echo $STR; 
		  if ($check1a=="xxx"){  $check1a = "";	}
		  if ($check2a=="xxx"){  $check2a = "";	}
		  if ($check3a=="xxx"){  $check3a = "";	}
		  if ($check4a=="xxx"){  $check4a = "";	}
		  if ($check5a=="xxx"){  $check5a = "";	}
		  if ($check1=="xxx"){  $check1 = "";	}
		  if ($check2=="xxx"){  $check2 = "";	}
		  if ($check3=="xxx"){  $check3 = "";	}
		  //echo "<br>";
		  //echo $check1a."-";
		  //echo $check2a."-";
		  //echo $check3a."-";
		  //echo $check1."-";
		  //echo $check2."-";
		  //echo $check3."-";

          $result= mysqli_query($bdCondor,$STR);
          while ( $product=mysqli_fetch_array($result)) {
          ?>    
		       <div class="grid-servicios">
					<div class="maneja1">
						  <a href="serviciostodo4a.php?id=<?php echo $product['camp0']; ?>">
						  <img src="img/<?php echo $product['foto']; ?>" alt="">
						  <?php //echo $product['cat1'];  ?>&nbsp;
						  <?php //echo $product['cat2'];  ?>&nbsp;
						  <?php echo $product['cat3'];  ?>
						  </a>
					</div>
					<div class="maneja2">
							<div id="cont-detalla">
								<div class="mini-container">
									<h3><?php echo $product['titulo']; ?></h3>
									<?php echo $product['descrip2']; ?>
									<!--a href="serviciostodo4a.php?id=<?php echo $product['camp0']; ?>">Ver Más</a-->
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
                <p>ESTAMOS LISTOS PARA CONSTRUIR SU SUEÑO DIGANOS MÁS SOBRE SU VIAJE</p>
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