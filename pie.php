    <footer id="main-footer">
        <div class="container">
            <div id="footer-des">
                <div class="gr_44">
                    <div class="mini-container">
					<?php
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'a3' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$result1 = $row[2];
						$rfoto = $row[3];
						$rdescrip = $row[4];
					}
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
					//youtube
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b7' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$ryoutube = $row[4];
					}
					//google plus
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b8' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$rgoogle = $row[4];
					}

					//email
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b3' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$remail = $row[4];
					}
					//telefono
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b4' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$rtelef = $row[4];
					}
					//direccion
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b2' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$rdirec = $row[4];
					}
					//nosotros
					$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE camp0 = '1' order by orden DESC ";
					$exect = mysqli_query($bdCondor,$sql);
					while ($row = mysqli_fetch_array($exect)) {
						$rnosotros = $row[4];
					}
					?>
					
                        <img src="img/<?php echo $rfoto; ?>" alt="">

                        <!--img src="img/footer-logo.png" alt=""-->
                        <p><?php //echo substr($rnosotros,0,300); ?>
CAPACITA-T, es una organizaci&oacute;n que brinda los servicios de consultor&iacute;a, asesor&iacute;a, capacitaci&oacute;n e implementaci&oacute;n de proyectos empresariales, tecnol&oacute;gicos y sociales en el &aacute;mbito local, nacional e internacional.						
						</p>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>SERVICIOS</h4>
                        <div class="mail">
                            <ul>
                                <li>
									<?php
									$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'main' order by orden DESC, camp0 DESC limit 0, 6";
									$exect = mysqli_query($bdCondor,$sql);
									while ($row = mysqli_fetch_array($exect)) {
									?>
	                                    <a href="servi1.php?id=<?php echo $row["camp0"]; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>
										<?php echo substr($row["titulo"],0,25); ?></a>
									<?php
									}
									?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>CONTACTENOS</h4>
                        <div id="contac">
                            <p><i class="fa fa-home" aria-hidden="true"></i><span><?php echo $rdirec; ?></span></p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><span><a href="tel:<?php echo $rtelef; ?>"><?php echo $rtelef; ?></a></span></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $remail; ?>"><?php echo $remail; ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="gr_44">
                    <div class="mini-container">
                        <h4>REDES SOCIALES</h4>
                        <div id="con-redes">
                           <br>
                            <a href="<?php echo $rface; ?>" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $rtwiter; ?>" target="_blank">
		                        <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $rgoogle; ?>" target="_blank">
		                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $ryoutube; ?>" target="_blank">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copy">
                    <p>@ 2023 Netlima E.I.R.L. | Todos Los Derechos Reservados</p>
            </div>
        </div>
    </footer>
    
    <!--span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span-->
    
