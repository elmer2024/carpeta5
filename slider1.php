    <div id="slider">
        <div id="mover">


			<?php
			$sql = "SELECT camp0, tipo, titulo, foto, descripcion, orden FROM nosotros WHERE tipo = 'g1' order by orden DESC ";
			$exect = mysqli_query($bdCondor,$sql);
			while ($row = mysqli_fetch_array($exect)) {
			?>
				<article>
					<img src="img/<?php echo $row["foto"]; ?>" alt="">
					<div class="g_50">
						<div class="mini-container">
							<h2><?php //echo $row["titulo"]; ?></h2>
							<p><?php //echo $row["descripcion"]; ?></p>
							                    </div>
					</div>
			  </article>
			<?php
			}
			?>


        </div>
        <div id="anterior" class="wow fadeInLeft">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div id="siguiente" class="wow fadeInRight">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>
