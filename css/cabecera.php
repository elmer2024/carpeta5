		<?
		//email
		$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b3' order by orden DESC ";
		$result = mysql_query($cadenaSQL, $dbh);
		$remail = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
		//telefono
		$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, rubro FROM nosotros WHERE tipo = 'b4' order by orden DESC ";
		$result = mysql_query($cadenaSQL, $dbh);
		$rtelef = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
		$rtelef2 = mysql_result($result, 0, 5 );   //0 es el row, 1 es el campo   
		//face
		$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b5' order by orden DESC ";
		$result = mysql_query($cadenaSQL, $dbh);
		$rface = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
		//twiter
		$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b6' order by orden DESC ";
		$result = mysql_query($cadenaSQL, $dbh);
		$rtwiter = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
		//google plus
		$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'b8' order by orden DESC ";
		$result = mysql_query($cadenaSQL, $dbh);
		$rgoogle = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
		?>

        <div id="header-arriba">
            <div class="container">
                <div class="header-left">
                   <div class="mini-container">
                     <a href="mailto:email@dominio.com"><i class="fa fa-envelope" aria-hidden="true"></i><? echo $remail; ?></a>
                     <a href="tel:<? echo $rtelef; ?>"><i class="fa fa-phone" aria-hidden="true"></i><? echo $rtelef; ?></a>
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
                    <a href="tel: <? echo $rtelef2; ?>">
				 	<!--a href="https://api.whatsapp.com/send?phone=51922735022&text=<? echo $texws; ?>" target="_blank"-->
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        
        
        <div id="hader-main">
            <div class="container">
                <div class="c-logo">
                    <a href="index.php">
					<?
					$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'a3' order by orden DESC ";
					$result = mysql_query($cadenaSQL, $dbh);
					$result1 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
					$rfoto = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
					$rdescrip = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
					?>
					
                        <img src="img/<? echo $rfoto; ?>" alt="">
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
											<ul>
												<li><a href="http://netlima.com/lugarcono3b.php?pComput1=6">
												Avisos de Wilson<i></i></a></li>
												<li><a href="empren1.php">videos - emprendedores<i></i></a></li>
											</ul>
							
							</li>
                            <li><a href="servicios.php">SERVICIOS</a></li>
                            <li><a href="portafolio.php">PORTAFOLIO</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div id="hader-main2">
            <div class="container">
                <div class="c-logo">
                    <a href="index.php">
					<?
					$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'a3' order by orden DESC ";
					$result = mysql_query($cadenaSQL, $dbh);
					$result1 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   
					$rfoto = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   
					$rdescrip = mysql_result($result, 0, 4 );   //0 es el row, 1 es el campo   
					?>
					
                        <img src="img/<? echo $rfoto; ?>" alt="">
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
											<ul>
												<li><a href="http://netlima.com/lugarcono3b.php?pComput1=6">
												Avisos de Wilson<i></i></a></li>
												<li><a href="empren1.php">videos - emprendedores<i></i></a></li>
											</ul>
							
							</li>
                            <li><a href="servicios.php">SERVICIOS</a></li>
                            <li><a href="portafolio.php">PORTAFOLIO</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
