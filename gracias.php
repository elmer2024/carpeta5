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
    <?
	$pcamp0=$_POST["id"];
	$nombres=$_POST["nombres"];
	$telefono=$_POST["telefono"];
	$email=$_POST["email"];
	$asunto=$_POST["asunto"];
	$mensaje=$_POST["mensaje"];
	include "connec.php"; 

	$fecha1 =  date("j-n-Y");
	?>
    <header>
		<? include "cabecera.php" ?>
    </header>
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
					<?
					$strSQL = "INSERT INTO mensajes (";
					$strSQL = $strSQL ."camp0, ";
					$strSQL = $strSQL ."nombre, ";
					$strSQL = $strSQL ."telef, ";
					$strSQL = $strSQL ."email, ";
					$strSQL = $strSQL ."asunto, ";
					$strSQL = $strSQL ."descripcion, ";
					$strSQL = $strSQL ."fecha ";
					$strSQL = $strSQL .") VALUES (";
					$strSQL = $strSQL ."'', ";
					$strSQL = $strSQL ."'" .$nombres."', ";
					$strSQL = $strSQL ."'" .$telefono."', ";
					$strSQL = $strSQL ."'" .$email."', ";
					$strSQL = $strSQL ."'" .$asunto."', ";
					$strSQL = $strSQL ."'" .$mensaje."', ";
					$strSQL = $strSQL ."'" .$fecha1."' )";
					//$result = mysql_query($strSQL);
					//echo $strSQL;


				
					?>


            <h2>GRACIAS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <!-- Gracias -->
    <section id="con-gracias">
        <div class="container">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p>MUCHAS GRACIAS POR PONERSE EN CONTÁCTO CON NOSOTROS, EN BREVE MOMENTO NOS PONDREMOS EN CONTACTO CON USTED</p>
        </div>
    </section>
    <!-- Fin del Gracias -->
    
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