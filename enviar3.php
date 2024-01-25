<?php
   //$destino = "netlima2014@gmail.com";
   //$destino = "jorosco@convecsa.com.pe";
   $id2 = $_POST["id"];
   $destino = $_POST["destino"];
   $nombre = $_POST["nombres"];
   $telefono = $_POST["telefono"];
   $email = $_POST["email"];
   $asunto = $_POST["asunto"];
   $mensaje = $_POST["mensaje"];
   $fecha = $_POST["fecha"];
   $adultos = $_POST["adultos"];
   $ninos = $_POST["ninos"];
   $telef = $_POST["telef"];
   $contenido = "Nombres: " . $nombres . "\nTelefono: " . $telefono . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
   //mail($destino,"Contacto", $contenido);


					include "conexion.php"; 
					$fecha1 =  date("j-n-Y");


					$strSQL = "INSERT INTO mensajes (";
					$strSQL = $strSQL ."camp0, ";
					$strSQL = $strSQL ."nombre, ";
					$strSQL = $strSQL ."telef, ";
					$strSQL = $strSQL ."email, ";
					$strSQL = $strSQL ."asunto, ";
					$strSQL = $strSQL ."descripcion, ";
					$strSQL = $strSQL ."fecha ";
					$strSQL = $strSQL .") VALUES (";
					$strSQL = $strSQL ."'', ";
					$strSQL = $strSQL ."'" .$nombres."', ";
					$strSQL = $strSQL ."'" .$telefono."', ";
					$strSQL = $strSQL ."'" .$email."', ";
					$strSQL = $strSQL ."'" .$asunto."', ";
					$strSQL = $strSQL ."'" .$mensaje."', ";
					$strSQL = $strSQL ."'" .$fecha."' )";
//					mysqli_query( $mysqli, $strSQL );
//					$result = mysql_query($strSQL);

                    $query="INSERT INTO nosotros3 (titulo,tipo,id2,nombre,descripcion,correo,orden,rubro,url2,descrip2,foto2,dueno, fecha, adultos, ninos, telef)
                    VALUE('$asunto','$tipo','$id2','$nombre','$mensaje','$email','$orden','$rubro','$url2','$desc2','$fot2','$duen','$fecha1','$adultos','$ninos','$telef')";

//  echo $query;                           
                             
                             $excute = mysqli_query($bdCondor,$query) or die(mysqli_error($bdCondor)) ;
                             if($excute){
                                echo "Archivo Subido Correctamente.";
                            }else{
                                echo "Ha fallado la subida, reintente nuevamente.";
                            } 


   header("location:gracias.php");
?>