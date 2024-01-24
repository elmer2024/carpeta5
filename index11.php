<? session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '273547462307821');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=273547462307821&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- clarity -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "j5hq2c81mp");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TT20X1QTFS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TT20X1QTFS');
</script>

	<meta name="facebook-domain-verification" content="dnst3g1zo3lasvy89sb07jivp70az4" />
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
<body>
<?
$pass1=$_POST["pass1"];
$logeo=$_SESSION['logeado'];
?>
	<span class="ir-arriba"><i class="fa fa-angle-up"></i></span>

	<section class="ancho-1040">


		<?
		include ("menu1.php");
		include("conexion.php");
		//include("cabe2.php");
		?>


		<?
		////include ("slider3.php");
		//include ("slider4b.php");
		?>
		<div class="bann2">
			
				<?
				//include ("celu2.php");
				$carpeta="https://netlima.com/peru/";
				$carpeta="https://netlima.com/editor/peru/";
				$carpeta2="https://netlima.com/";
	
	
				$vartitu="LIMA DIA A DIA";
				$varsubtitu="PROXIMO EVENTOS";
				$varg="WAS1";
				include("inde001.php");   //sobre lima dia a dia
				?>
		</div> 

		<section class="cuerpo">
		  <div class="cuerpo-izquierda">

			<?
			$carpeta="https://netlima.com/peru/";
			$carpeta="https://netlima.com/editor/peru/";
			$carpeta2="https://netlima.com/";


			$vartitu="LIMA DIA A DIA";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="DIA";
			include("inde01.php");   //sobre lima dia a dia

			$vartitu="ACTUALIDAD ";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="ACT";
			include("inde01.php");   //sobre lima dia a dia


			$vartitu="FUTBOL";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="FUT";
			include("inde01.php");   //sobre lima dia a dia

			$vartitu="TENDENCIAS";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="TEN";
			include("inde01.php");   //sobre lima dia a dia


			$vartitu="POLITICA";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="POLI";
			include("inde01.php");   //sobre lima dia a dia


			$vartitu="ENVIADOS POR WSP";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="WSP";
			include("inde01.php");   //sobre lima dia a dia

			$vartitu="DE OTROS - RECOMENDADOS";
			$varsubtitu="PROXIMO EVENTOS";
			$varg="REC";
			include("inde01.php");   //sobre lima dia a dia



			?>



		    <section class="header-izquierda"></section>

			  <section class="bloque-imagenes"></section>

				<section class="header-izquierda">
					<div class="borde-left-naranja">
						<h1>Dando una vuelta por Lima</h1>
						<h3>Imagenes del dia a dia de lima</h3>
					</div>
					<div>
						<div>
							<a href="noticiacat.php?tipo=fotor2" class="naranja">Ver mas</a>
						</div>
					</div>
				</section>

	<?
//	$cadenaSQL = "SELECT camp0, titulo, resumen, foto, fuente_foto, link1, fecha, forma, tipo, distrito, link1, hasta, desde FROM peru_noti WHERE tipo like 'R%' order by fechanum DESC, camp0 DESC limit 0,6";
	$cadenaSQL = "SELECT camp0, titulo, resumen, foto, fuente_foto, link1, fecha, forma, tipo, distrito, link1, hasta, desde FROM peru_noti2 WHERE tipo like 'fotor2%' order by fechanum DESC, camp0 DESC limit 0,6";
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
					<div class="contenedor-enlaces-interes">
						<?
						if ($emusu!="")
						{
						?>
							<div class="header-derecha borde-left-azul">
								<h4>TU ACTIVIDAD</h4>
							</div>

							<table width="250" border="0" cellspacing="0" cellpadding="2">
							<?
							$fechasema = getdate();
							$fechahoy =  date("Ymd"); 
							$cadenaSQL = "SELECT camp0, titulo, descripcion, autor, fecha, tipo, idnoti, ip, link1, email  FROM peru_noti WHERE tipo = 'Q1' and visitas = '0' and email = '$emusu' order by camp0 DESC limit 0,10";
				
							$exect = mysqli_query($bdCondor,$cadenaSQL);
							while ($row = mysqli_fetch_array($exect)) 
							{
								$ptipo = $row[5];
								?>		
								<tr>
									<td width="30" align="right" valign="top">
									- </td>
									<td align="left">
									<?
									if ($row[14]!="")
									{
										echo "En ";
									}
				
				
									?>
									<a href="lugar-deta.php?pcamp0=<? echo $varcamp0; ?>&tipo=<? echo $row[5]; ?>">
									<font face="Arial" color="#666666" size="2">
									<? echo $vartitu1; ?>
									</font>
									</a><br />					
									<font face="Arial" color="#cccccc" size="2">
									<? 
									$varresum1 = substr($row[2],0,60);   
									echo $varresum1; 
									?>...</font><br /><br>
									</td>
								</tr>
							<?		
							}
							?>		
							</table>	

						<?
						}
						?>



				<?
				//include ("celu2.php");
				$carpeta="https://netlima.com/peru/";
				$carpeta="https://netlima.com/editor/peru/";
				$carpeta2="https://netlima.com/";
	
	
				$vartitu="LIMA DIA A DIA";
				$varsubtitu="PROXIMO EVENTOS";
				$varg="WAS1";
				include("inde001.php");   //sobre lima dia a dia
				?>


						<div class="header-derecha borde-left-azul">
							<h4>LO MAS POPULAR EN NETLIMA</h4>
						</div>
						<div class="contenido-derecha-uno">

								<?
								////include ("paracompu1.php");
								//include ("paracompu2.php");
								?>


							<article class="bloque-contenido-derecha">
								<div><a href="directoriocatlm2carr.php" target="_blank">
								<img src="<?php echo $carpeta2 ?>image/Catalogo_en_linea.jpg" alt=""></a></div>
								<div>
									<h5><a href="https://netlima.com/transpor1c.php" target="_blank">Ver Rutas del metropolitano</a></h5>
									<p><font color="#999999">
									Lineas activas segun la hora actual.
									</font></p>
								</div>
							</article>
							<article class="bloque-contenido-derecha">
								<div><a href="marcador1.php"><img src="<?php echo $carpeta2 ?>image/rsocial.jpg" alt=""></a></div>
								<div>
									<h5><a href="marcador1.php">Marcador web</a></h5>
									<p><font color="#999999">
									Ingresa a la comunidad de Netlima y accede a todas las opciones y participa sin restricciones.
									</font></p>
								</div>
							</article>
							<article class="bloque-contenido-derecha">
								<div><a href="http://www.netlima.com/directoriosalud.php?cate=10" target="_blank">
								<img src="<?php echo $carpeta2 ?>image/Catalogo_en_linea.jpg" alt=""></a></div>
								<div>
									<h5><a href="https://twitter.com/SedapalOficial" target="_blank">
									Ver pagina de SEDAPAL</a></h5>
									<p><font color="#999999">
									Centros medicos, clinicas y policlinicos con sus respectivas direcciones y telefonos.
									</font></p>
								</div>
							</article>



						</div>
					</div>

					<div class="contenedor-directorio">
						<section>
							<div class="header-derecha borde-left-azul">
								<h4>Otros medios de prensa</h4>
							</div>
							<div class="contenido-derecha-dos">
									<a href="">
									<img src="<?php echo $carpeta2 ?>image/mediosp.jpg" alt=""></a>
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
									<a href="turismo.php"><img src="<?php echo $carpeta2 ?>image/lima_tours_tui_travel.jpg" alt=""></a>
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

		<?
		include ("footer1.html");
		?>

<?
		  


if ($emusu!="")
{
	include("connec_data1.php");
	
	
	$nombre="index.php";
	$fecha2 =  date("Ymd"); 
	$fecha1 =  date("D-j-n-Y");
	$hora = getdate(time());
	//$hora2 =  date("h : m : s");
	$hora2 =  date("h : i");
	$hora3 =  date("D-j-n-Y");
	$ip = $_SERVER['REMOTE_ADDR']; 
	

	$ptipo1 = $ptipo." ".$genero;
	
	$pdedonde1 = $pdedonde."<br>".$vardeurl;
	$sql = "INSERT INTO visitas2(ip, hora, fecha, pagina, titulo, fechanum, tipoev, id, fechaor, fechanumor, dedonde, usuario, email) ";
	$sql .= "VALUES ('$ip', '$hora2', '$hora3', '$nombre', 'INDEX', '$fecha2', '$ptipo1', '$pcamp0', '$fechaor', '$varr9', '$pdedonde1', '$logiusu', '$emusu')";
	$result = mysql_query($sql);

}

?>



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

<!-- Default Statcounter code for LDD
https://limadiaadia.com/ -->
<script type="text/javascript">
var sc_project=12912504; 
var sc_invisible=1; 
var sc_security="1498f5e8"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - Statcounter" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12912504/0/1498f5e8/1/"
alt="Web Analytics Made Easy - Statcounter"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
<a href="https://statcounter.com/p12912504/?guest=1" target="_blank"><font color="#CCCCCC">Ver
visitas</font></a>	
</body>
</html>