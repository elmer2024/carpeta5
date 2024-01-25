<?php
   $destino = $_POST["destino"];
   $nombre = $_POST["nombres"];
   $telef = $_POST["telefono"];
   $email = $_POST["email"];
   $asunto = $_POST["asunto"];
   $mensaje = $_POST["mensaje"];
   //$contenido = "Nombres: " . $nombre . "\nTelefono: " . $telef . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
   //mail($destino,"Contacto", $contenido);


//					include "conexion.php"; 
					$fecha1 =  date("j-n-Y");


//                    $query="INSERT INTO mensajes (nombre,descripcion,email, fecha, telef)VALUE('$nombre','$mensaje','$email','$fecha','$telef')";
                    $query="INSERT INTO mensajes (nombre,descripcion,email, fecha, telef)VALUE('$nombre','$mensaje','$email','$fecha','$telef')";
					
                             $excute = mysqli_query($bdCondor,$query) or die(mysqli_error($bdCondor)) ;

//   header("location:gracias.php");
echo "ddddd";
?>