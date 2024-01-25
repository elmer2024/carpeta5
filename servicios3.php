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
            <h2>SERVICIO 3</h2>
        </div>
    </section>
    <!-- Fin del contenedor-titulo -->
    
    <section id="con-det-servicios">
      <div class="container">
			<?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden, url2 FROM nosotros WHERE tipo = 'c3' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			?>
				<div class="grid-servicios">
					<a href="servicios1b.php?id=<? echo $row["camp0"]; ?>">
					<img src="img/<? echo $row["foto"]; ?>" alt="">
					</a>
					<div class="con-serv"></div>
					<div id="cont-detalla">
						<div class="mini-container2">
							<h3><? echo $row["titulo"]; ?></h3>
							<p><? echo substr($row["descripcion"],0,180); ?></p>
							<!--a href="<? echo $row["url2"]; ?>">Ver Más</a-->
						</div>
					</div>
				</div>

			<?
			}
			?>

		  
		  </div>
    </section>
    
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
    <footer id="main-footer">
        <div class="container">
            <div id="footer-des">
                <div class="gr_44">
                    <div class="mini-container">
                        <img src="img/footer-logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet augue a massa consectetur interdum in sit amet ipsum. Donec mattis massa vitae leo finibus porta.</p>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>SERVICIOS</h4>
                        <div class="mail">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>SERVICIOS 1</a>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>SERVICIOS 2</a>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>SERVICIOS 3</a>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>SERVICIOS 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>CONTÁCTENOS</h4>
                        <div id="contac">
                            <p><i class="fa fa-home" aria-hidden="true"></i><span>1234 Lorem Road, ISpum A Kennesaw, GA 1234</span></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:943 575 293">943 575 293</a></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:email@dominio.com">email@dominio.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>REDES SOCIALES</h4>
                        <div id="con-redes">
                           <br>
                            <a href="#" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copy">
                    <p>© 2017 Convecsa | Todos Los Derechos Reservados</p>
            </div>
        </div>
    </footer>
    
    <span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
    
    <!-- Fin del Footer -->
    <script type="text/javascript" src="js/menu-fixed.js"></script>
    <script type="text/javascript" src="js/subir.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
          new WOW().init();
    </script>
</body>
</html>