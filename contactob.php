<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php include "conexion.php" ?>
	<?php include "cabecera_head.php" ?>
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
	<?php include "conexion.php" ?>
    <header>
		<?php include "cabecera.php" ?>
    </header>
    
    <!-- Contenedor-titulo -->
    <section id="contenedor-titulo">
        <div class="container">
            <h2>CONTÁCTENOS</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->

				<?php
				//direccion
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b2' order by orden DESC ";
				$exect = mysqli_query($bdCondor,$sql);
				while ($row = mysqli_fetch_array($exect)) {
					$rdirec = $row[4];
				}
				//email
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b3' order by orden DESC ";
				$exect = mysqli_query($bdCondor,$sql);
				while ($row = mysqli_fetch_array($exect)) {
					$remail = $row[4];
					$remail2 = $row[5];
				}
				//telefono
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b4' order by orden DESC ";
				$exect = mysqli_query($bdCondor,$sql);
				while ($row = mysqli_fetch_array($exect)) {
					$rtelef = $row[4];
					$rtelef2 = $row[5];
				}
				//mapa
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b0' order by orden DESC ";
				$exect = mysqli_query($bdCondor,$sql);
				while ($row = mysqli_fetch_array($exect)) {
					$rmapa = $row[4];
				}
				?>

    
    <!-- Google Maps -->
    <!--section id="contenedor-mapa">
		<?php //echo $rmapa; ?>
    </section-->
    <!-- Fin Del Google Maps -->
    
		<img src="img/conta1.jpg">

    <!-- Formulario Contacto -->
    <section id="contenedor-form">
        <div class="container">
            <aside class="left-formulario">
                <div class="mini-container">
                    <form action="enviar3.php" method="post">
                        <input type="hidden" class="input_c1" name="destino" id="" value="netlima2014@gmail.com">
                        <input name="id" type="hidden" class="input_c1" id="" value="<?php echo $id2; ?>" placeholder="*Nombres" required>
                        <input type="text" class="input_c1" name="nombres" id="" placeholder="*Nombres" required>
                        <input type="text" class="input_c1" name="ape" id="" placeholder="*Apellidos" required>
                        <input type="text" class="input_c1" name="telef" id="" placeholder="Telefono" >
                        <input type="email" class="input_c1" name="email" id="" placeholder="Email" required>
                        <input type="text" class="input_c1" name="asunto" id="" placeholder="Asunto" required>
                        <textarea cols="0" rows="0" class="textarea_c1" name="mensaje" id="" placeholder="Mensaje" required></textarea>
                        <input type="submit" class="submit-c1" value="Enviar">
                    </form>
                </div>
            </aside>
            <article class="right-datos">
                <div class="grid-160">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h3>DIRECCIÓN:</h3>
                    <p><?php echo $rdirec; ?></p>
                </div>
                <br>
                <div class="grid-160">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h3>EMAIL:</h3>
                    <p><a href="mailto:<?php echo $remail; ?>"><?php echo $remail; ?></a></p>
                    <p><a href="mailto:<?php echo $remail2; ?>"><?php echo $remail2; ?></a></p>
                </div>
                <br>
                <div class="grid-160">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h3>TELEFONO:</h3>
                    <p><a href="tel: <?php echo $rtelef; ?>"><?php echo $rtelef; ?></a></p>
                    <p><a href="tel: <?php echo $rtelef2; ?>"><?php echo $rtelef2; ?></a></p>
                </div>
            </article>
        </div>
    </section>
    <!-- Fin del Formulario Contacto -->
    
    <!-- Footer -->
		<?php include "pie2.php" ?>
    <!-- Fin del Footer -->

    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>