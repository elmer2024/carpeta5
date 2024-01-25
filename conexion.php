<?php 
      $bdCondor=mysqli_connect("localhost","netlima_elmer2","RYTN.ojdQt+X");
  		mysqli_select_db($bdCondor,"netlima_diseno18");
       if (!$bdCondor) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
         }
//		 echo "bien";

?>
