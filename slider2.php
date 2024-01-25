    <div id="slider">
        <div id="mover">


			<?
			$cadenaSQL = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'g1' order by orden DESC ";
			//$cadenaSQL = $cadenaSQL.$cadenaSQL1;
			$result = mysql_query($cadenaSQL, $dbh);
			while($row = mysql_fetch_array($result))
			{
			?>
				<article>
					<img src="img/<? echo $row["foto"]; ?>" alt="">
					<div class="g_50">
						<div class="mini-container">
							<h2><? echo $row["titulo"]; ?></h2>
							<p><? echo $row["descripcion"]; ?></p>
							<a href="#">Ver Más</a>                    </div>
					</div>
			  </article>
			<?
			}
			?>


            <article>
                <img src="img/slider/banner4.jpg" alt="">
                <div class="g_50">
                    <div class="mini-container">
                        <h2>TITULO LOREM 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis convallis elit, a sodales elit. Nullam orci dolor, tincidunt ac leo vel, fermentum pharetra mi. Aliquam scelerisque est vitae est congue euismod id sed ex. Maecenas a quam id nulla luctus tristique.</p>
                        <a href="#">Ver Más</a>                    </div>
                </div>
          </article>
            <article>
                <img src="img/slider/banner5.jpg" alt="">
                <div class="g_50">
                    <div class="mini-container">
                        <h2>TITULO LOREM 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis convallis elit, a sodales elit. Nullam orci dolor, tincidunt ac leo vel, fermentum pharetra mi. Aliquam scelerisque est vitae est congue euismod id sed ex. Maecenas a quam id nulla luctus tristique.</p>
                        <a href="#">Ver Más</a>                    </div>
                </div>
          </article>
        </div>
        <div id="anterior" class="wow fadeInLeft">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div id="siguiente" class="wow fadeInRight">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>
