		<?php
		//titulo
//		$sql = "SELECT camp0, tipo, titulo, descripcion, descrip2 FROM nosotros WHERE tipo = 'titulo' order by orden DESC ";
//		$exect = mysqli_query($bdCondor,$sql);
//		while ($row = mysqli_fetch_array($exect)) {
//			$rtitulo = $row[2];
//			$rdescrip = $row[3];
//			$rclaves = $row[4];
//		}

		//email
		$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b3' order by orden DESC ";
		$exect = mysqli_query($bdCondor,$sql);
		while ($row = mysqli_fetch_array($exect)) {
			$remail = $row[4];
		}


		//telefono
		$sql = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b4' order by orden DESC ";
		$exect = mysqli_query($bdCondor,$sql);
		while ($row = mysqli_fetch_array($exect)) {
			//echo $row[4].' '.$row[5];
			$rtelef = $row[4];
			$rtelef2 = $row[5];
		}
		$rtelefnum =str_replace(' ', '', $rtelef);
		$rtelef2num =str_replace(' ', '', $rtelef2);


		//face
		$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b5' order by orden DESC ";
		$exect = mysqli_query($bdCondor,$sql);
		while ($row = mysqli_fetch_array($exect)) {
			$rface = $row[4];
		}

		//twiter
		$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b6' order by orden DESC ";
		$exect = mysqli_query($bdCondor,$sql);
		while ($row = mysqli_fetch_array($exect)) {
			$rtwiter = $row[4];
		}
		//google plus
		$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b8' order by orden DESC ";
		$exect = mysqli_query($bdCondor,$sql);
		while ($row = mysqli_fetch_array($exect)) {
			$rgoogle = $row[4];
		}
		?>

        <div id="header-arriba" style="background-color:<?php echo $rcolor2 ?>">
            <div class="container">
                <div class="header-left">
                   <div class="mini-container">
                     <a href="mailto:<?php echo $remail; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $remail; ?></a>
                     <a href="https://api.whatsapp.com/send?phone=51<?php echo $rtelefnum; ?>" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $rtelef; ?></a>
					 <!--span class="parpadea"><a href="http://netlima.com/landing/" target="_blank">
					 <font color="#FFFF33">Crea una web igual a esta</font></a></span-->

					 <!--span class="parpadea"><a href="http://netlima.com/disenoweb/serviciostodo1.php" target="_blank">
					 <font color="#FFFF33">Crea una web igual a esta</font></a></span-->

                   </div>
                </div>
                <div class="header-right">
                    <a href="<? echo $rface; ?>" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="<? echo $rtwiter; ?>" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="<? echo $rgoogle; ?>" target="_blank">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <!--a href="tel: <? echo $rtelef2; ?>"-->
				 	<a href="https://api.whatsapp.com/send?phone=51<? echo $rtelefnum; ?><? //echo $texws; ?>" target="_blank">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        
				<?php 
						//$rcolor = "#333333";
				?>
        
        <div id="hader-main" style="background-color:<?php echo $rcolor ?>">
            <div class="container">
                <div class="c-logo">
                    <a href="index.php">
					
				<?php 
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'a3' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						
						$result1 = $row[2];
						$rfoto = $row[3];
						$rdescrip = $row[4];
				}
				?>


				<?php
				$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'a31' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					$pasa="no";
					while ($row = mysqli_fetch_array($exect)) {
						$pasa="si";
						$rfotocel = $row[3];
					}
					if ($pasa=="no")
					{
					  //print "no existen registros";
					}
					Else
					{
					}
					?>
					<img src="img/<?php echo $rfoto; ?>" alt="">
                    </a>
                </div>
                <div class="c-menu">
                    <input type="checkbox" id="btn-menu">
                    <label for="btn-menu">
                        <i class="fa fa-bars" aria-hidden="true"></i>                    </label>
                    <nav class="menu">
                        <ul>
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="nosotros.php">NOSOTROS</a>
											<!--ul>
												<li><a href="http://netlima.com/lugarcono3b.php?pComput1=6">
												Avisos de Wilson<i></i></a></li>
												<li><a href="empren1.php">videos - emprendedores<i></i></a></li>
											</ul-->
							
							</li>
                            <li><a href="#" onClick="toggleOverlay()">NOSOTROS<svg width="20" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m6 9 6 6 6-6"></path></svg></a>
								<div id="overlay" class="overlay">
									<ol>
										<li><a href="index.php">Filosof&iacute;a Corporativa</a></li>
										
										<li><a href="index.php">Ventaja Competitiva</a></li>
										
										<li><a href="index.php">Nuestro Equipo</a></li>
									</ol>
								</div>		
							</li>

                            <!--li><a href="serviciosx.php">CATEGORIAS</a></li-->
                            <li><a href="serviciostodo2.php">SERVICIOS</a></li>
                            <!--li><a href="serviciostodo6.php" class="menulargo">CAPACITACION EN LINEA </a></li-->
                            <!--li><a href="https://moodle.org/?lang=es" class="menulargo" target="_blank">AULA VIRTUAL </a></li-->
                            <li><a href="serviciostodo6.php" class="menulargo">AULA VIRTUAL </a></li>
                            <!--li><a href="fotos.php" class="menulargo">SOCIALES </a></li-->
                            <li><a href="fotos.php" class="menulargo">REVISTA<font color="#FFFFFF">_</font>&<font color="#FFFFFF">_</font> SOCIALES</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

		<script>
			
			function toggleOverlay() {
				console.log("hollas");
				
        		var overlay = document.getElementById('overlay');
        		overlay.style.display = (overlay.style.display === 'block') ? 'none' : 'block';
				console.log(overlay.style);
    		}	
		</script>

        <!--div id="hader-main1">
                <div class="c-logo">
					<div class="ppie1">
						  <a href="index.php"><font color="#990000">Crea tu web</font></a>		
					</div>
                </div>
                <div class="c-menu">
                <div class="ppie1">
						  <a href="admin/index.php"><font color="#666666">Administrar</font></a>		
				</div>
				</div>
		  </div-->
