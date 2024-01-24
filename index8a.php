<!DOCTYPE html>
<html lang="es">
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TT20X1QTFS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TT20X1QTFS');
</script>


	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="B-verify" content="a6aaeb85283a7aad8ff3b33282f35076f4032fcd" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lima dia a dia | Inicio</title>

    <link rel="shortcut icon" href="figuras/logo.ico" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/reset.css">
	<META name="Keywords" content="eventos en lima, eventos, esparcimiento, paseos, diversion en lima, donde ir, donde ir en lima, adonde ir, lugares de diversion, de lima, en lima, lugares para pasear, lima hoy, eventos hoy, lugares mas visitados, lugares para visitar, donde se puede pasear">
	
	<META name="Description" content="Guia para salir a lugares de diversion y esparcimiento, donde salir un fin de semana en Lima, lugares mas visitados en lima, guia de eventos, conciertos, paseos, culturales, deportivos y mas">

	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
	<!-- ICONOS FUENTE -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- FLEXSLIDER -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/flexslider-dos.css">

	
	
	<script src="js/modernizr.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/scripts.js"></script>

	

</head>
<style>
	.tab {
		background-color: #ACD9E5;
		border-radius: 7px;
		padding: 9px;
		width: 100%;
		height: 500px;
		font: small-caps 110%/220% times new roman;
		font-size: 1.3em;
	}

	.tab td{
		background-color: #ACD9E5;
		border-radius: 17px;
		padding: 9px;
	 	border: 1px solid #ccc;	
	 	color: #333;
	}	

	.selects{
		width: 95%;
		padding: 10px;
		border-radius: 5px;
	}	
</style>
<body>
<?
$pass1=$_POST["pass1"];
$logeo=$_SESSION['logeado'];
?>
	<span class="ir-arriba"><i class="fa fa-angle-up"></i></span>

	<section class="ancho-1040">
<style type="text/css">
<!--
.text1 {
color:#333333;
}
.text1:hover {
text-decoration: none;
color:#FFCC00;
}
-->
</style>

	<!-- <div>nueva etiqueta agregada</div> -->
		<?
		include ("menu1.php");
		include("conexion.php");
		//include("cabe2.php");
		?>


		<section class="cuerpo">
		  <div class="cuerpo-izquierda">

				<section class="header-izquierda">
						<table align="center" class="tab">
		<tr>
			<td colspan="2" align="center"><h3>PUBLICAR AVISO DE EMPLEO</h3></td>
		</tr>
		<tr>
			<td width="60%;" align="center">Seleccione la categoria del aviso</td>
			<td>
				<select class="selects" id="">
				      <option value="">Categorias</option>
			    </select>
		    </td>
		</tr>
		<tr>
			<td align="center">Seleccione el departamento</td>
			<td>
				<select name="" class="selects" id="">
				      <option value="">Departamentos</option>
			    </select>
		    </td>
		</tr>
		<tr>
			<td align="center">Inserte el nombre de la empresa
			</td>
			<td>
				<input type="text" name="" placeholder="Nombre de la empresa" id="" style="width: 89%; padding: 10px">

		    </td>              
		</tr>	
		<tr>
			<td align="center">Correo electronico
			</td>
			<td>
				<input type="text" name="" placeholder="Correo electronico" id="" style="width: 89%; padding: 10px">
			</td>                
		</tr>		
		<tr>
			<td align="center">Titulo</td>
			<td><input type="text" name="" placeholder="Titulo del aviso" id="" style="width: 89%; padding: 10px"></td>
		</tr>	
		<tr>
			<td align="center">Descripcion</td>
			<td><textarea name="" id="gg" cols="45" rows="5" style="resize: none;"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button style="padding: 10px; width: 10%; border-radius: 10px; background-color: #0A6FFE; color: white">Enviar</button></td>
		</tr>			
	</table>

				</section>




 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Avisos</title>
 </head> 
<style>
	
body {
}


.tablilla td{
	border-bottom: 1px solid #CCCCCC;
}

.tablilla th{
	border-bottom: 1px solid #CCCCCC;
}

 		textarea {
 			resize: none;
 		}

		select {
		  width: 30%;
		  padding: 10px;
		  border: 1px solid #ccc;
		  border-radius: 5px;
		  background-color: #fff;
		  font-size: 16px;
		  color: #333;
		  cursor: pointer;
		}

</style>
 <body>
				<section class="header-izquierda">
 	<div>
 		<table class="tablilla">
 			<tr>
 				<th style="padding: 5px;font-weight: bold;">ID</th>
 				<th style="padding: 5px;font-weight: bold;">USUARIO</th>
 				<th style="padding: 5px;font-weight: bold;">TITULO</th>
 				<th style="padding: 5px;font-weight: bold;">DESCRIPCION</th>
 			</tr>
			<?php 
			$cn = mysqli_connect("localhost", "netlima_elmer2", "RYTN.ojdQt+X", "netlima_empleos1");
	
			//$cn = mysqli_connect("localhost", "root", "", "netlima_empleos1");
			mysqli_set_charset($cn, "utf8");


$sql = "SELECT u.*, a.* from  user u, avisos a where a.iduser=u.iduser limit 5";

			$fila=mysqli_query($cn, $sql);	
			while ($r=mysqli_fetch_assoc($fila)) {

			 ?>


 			<tr>
 				<td style="padding: 10px"><?php echo $r["idaviso"] ?></td>
 				<td style="padding: 10px"><?php echo $r["nombreemp"] ?></td>
 				<td style="padding: 10px"><?php echo $r["titulo"] ?></td>
 				<td style="padding: 10px"><?php echo $r["descripcion"] ?></td>
 			</tr>

<?php 
}
 ?>

 		</table>
 	</div>

				</section>
 </body>
 </html>




		    <section class="header-izquierda"></section>

			  <section class="bloque-imagenes"></section>

				<section class="header-izquierda">
					<div class="borde-left-naranja">
						<h1>Dando una vuelta por Lima</h1>
						<h3>Imagenes del dia a dia de lima</h3>
					</div>
					<div>
						<div>
							<a href="indexfotos.php" class="naranja">Ver mas</a>
						</div>
					</div>
				</section>

	<?
//	$cadenaSQL = "SELECT camp0, titulo, resumen, foto, fuente_foto, link1, fecha, forma, tipo, distrito, link1, hasta, desde FROM peru_noti WHERE tipo like 'R%' order by fechanum DESC, camp0 DESC limit 0,6";
	$cadenaSQL = "SELECT camp0, titulo, resumen, foto, fuente_foto, link1, fecha, forma, tipo, distrito, link1, hasta, desde FROM peru_noti WHERE tipo like 'fotor2%' order by fechanum DESC, camp0 DESC limit 0,6";
	//$result = mysql_query($cadenaSQL, $dbh);
	?>

		<section class="slider-dos">
			<div class="banner">
			  <div class="banner-slider solucion">
				    <ul class="banner-slider_nav">
				    </ul>

					<?
					$exect = mysqli_query($bdCondor,$cadenaSQL);
					while ($row = mysqli_fetch_array($exect)) 
					{
						?>
					    <div class="banner_slide">
					     <a href="ss.php"><img class="banner_image" src="<? echo $carpeta.$row[3]; ?>"></a>
					      <div class="banner_overlay">
					        <div class="banner_overlay_container">
					          <section>
						          	<h1 class="banner_overlay_header"><? echo $row[1]; ?></h1>
						          	<h2 class="banner_overlay_subhead"><? echo $row[2]; ?>.</h2>
						          	<a class="banner_button" href="#"  data-buttontext="Button 1">
						          	  Get started now
						          	  <span class="icon icon--arrow icon--flushright"></span>						          	</a>					          </section>
					        </div>
					      </div>
					    </div>
						<?
					}
					?>

					<div class="cycle_arrow-wrapper">
					  <a href="#" class="cycle_prev">&#x27b2;</a> 
					  <a href="#" class="cycle_next">&#x27b2;</a>					</div>
			  </div>
			</div>
		</section>

	</div>








			<div class="cuerpo-derecha">
				<section>

					<div class="contenedor-directorio">
						<section>
							<div class="header-derecha borde-left-azul">
								<h4>Otros medios de prensa</h4>
							</div>
							<div class="contenido-derecha-dos">
									<a href="">
									<div>
										<br>
										<h4>Prensa alternativa.</h4>
										<p><font color="#999999">Otros medios de informacio, canales de youtube, paginas de facebook, webs de noticias.</font></p>
									</div>
							</div>
						</section>
						<section>
							<div class="header-derecha borde-left-azul">
								<h4>Turismo</h4>
							</div>
							<div class="contenido-derecha-dos">
								<div>
								</div>
								<div>
									<h4>Guia para turistas en Lima.</h4>
									<p><font color="#999999">La mejor guia para turistas que estan de paso por nuestra ciudad y quieren conocer los mejores lugares de Lima.</font></p>
								</div>
							</div>
						</section>
					  <section></section>
					  <section></section>
					</div>

				</section>
			</div>
		</section>

	</section>


	<span class="ir-arriba"><i class="fa fa-angle-up"></i></span>
	<section class="footer">
			<article>
				<section>
					<div>
						<h5>Net-Lima</h5>
					</div>
					<div>
						<p>Netlima es la pagina de lugares y eventos en Lima, aqui encontraras las mejores opciones de diversion y ademas sugerencias de acuerdo a tu zona, presupuesto o con quienes vas ir a divertirte. </p>
					</div>
				</section>
			</article>
			<article>
				<section class="footjun">
					<div>
						<h5>enlaces</h5>
					</div>
					<div class="enlaces-footer">
						<a href="marcador1.php">Anotador web<i class="fa fa-angle-right"></i></a>
						<a href="eventosrec2.php">Recomendados<i class="fa fa-angle-right"></i></a>
						<a href="http://netlima.com/publici1.php">Publicidad<i class="fa fa-angle-right"></i></a>
						<a href="contacto1.php">Contactenos<i class="fa fa-angle-right"></i></a>
					</div>
				</section>
			</article>
			<article>
				<section>
					<div>
						<h5>social media</h5>
					</div>
					<div>
						<p>Tambien pueden seguirnos en nuestras redes sociales como :</p>
					</div>
					<div class="social-media-footer">
						<a href="https://www.facebook.com/netlimacom/" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href="https://www.youtube.com/channel/UCyKwppBu9fl_MkQh3fkFYjg" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
				</section>
			</article>
			<article>
				<section>
					<div>
						<h5>contacto</h5>
					</div>
					<div class="datos-contacto-footer">
						<a href="indexmay3e.php"><i class="fa fa-envelope"></i>contacto@netlima.com</a>
						<a href=""><i class="fa fa-phone"></i>933 928 016</a>
						<a href=""><i class="fa fa-phone"></i>733-5302</a>
						<a href=""><i class="fa fa-map-marker"></i>Av. Habich 555 - SMP</a>
					</div>
				</section>
			</article>
	</section>

		<section class="credito-footer">
			<div>
				<p>@ Desarrollo Web 2020. Reservados todos los derechos - Elmer Espinoza Alvarado</p>
			</div>
		</section>


<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">

    (function() {

      // store the slider in a local variable
      var $window = $(window),
          flexslider;

      // tiny helper function to add breakpoints
      function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
               (window.innerWidth < 900) ? 3 : 3;
      }

      $(function() {
        SyntaxHighlighter.all();
      });

      $window.load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          animationSpeed: 400,
          animationLoop: false,
          itemWidth:1,
          itemMargin: 3,

          minItems: 3, // use function to pull in initial value
          maxItems: 3, // use function to pull in initial value
          start: function(slider){
            $('body').removeClass('loading');
            flexslider = slider;
          }
        });
      });

      // check grid size on resize event
      $window.resize(function() {
        var gridSize = getGridSize();

        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
      });
    }());

  </script>

  		<script src="js/jquery.js"></script>
        <script src="js/jquery.stepcycle.js"></script>
        <script>
        	$(document).ready(function(e){
        		var banner = $('.banner-slider').stepCycle({
        			transition: 'fade',
        			childSelector: '.banner_slide',
        			transitionTime: .75, 
        			navContainerSelector: '.banner-slider_nav', 
        			navDotClass:'banner-slider_nav_item', 
        			navItemTemplate: '<li class="banner-slider_nav_item banner-slider_nav_item--is-selected"><a href="#">&bull;</a></li>',
        			navSelectedClass: 'banner-slider_nav_item--is-selected'
        		});
        	})
        </script>
	


<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">

    (function() {

      // store the slider in a local variable
      var $window = $(window),
          flexslider;

      // tiny helper function to add breakpoints
      function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
               (window.innerWidth < 900) ? 3 : 3;
      }

      $(function() {
        SyntaxHighlighter.all();
      });

      $window.load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          animationSpeed: 400,
          animationLoop: false,
          itemWidth:1,
          itemMargin: 3,

          minItems: 3, // use function to pull in initial value
          maxItems: 3, // use function to pull in initial value
          start: function(slider){
            $('body').removeClass('loading');
            flexslider = slider;
          }
        });
      });

      // check grid size on resize event
      $window.resize(function() {
        var gridSize = getGridSize();

        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
      });
    }());

  </script>

  		<script src="js/jquery.js"></script>
        <script src="js/jquery.stepcycle.js"></script>
        <script>
        	$(document).ready(function(e){
        		var banner = $('.banner-slider').stepCycle({
        			transition: 'fade',
        			childSelector: '.banner_slide',
        			transitionTime: .75, 
        			navContainerSelector: '.banner-slider_nav', 
        			navDotClass:'banner-slider_nav_item', 
        			navItemTemplate: '<li class="banner-slider_nav_item banner-slider_nav_item--is-selected"><a href="#">&bull;</a></li>',
        			navSelectedClass: 'banner-slider_nav_item--is-selected'
        		});
        	})
        </script>

</body>
</html>