<?php
// Obtenemos el nombre del usuario desde la URL
$pcamp0 = $_GET['id'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Ejemplo de URL amigable</title>
</head>
<body>

<?
	include("connec.php");

$result = mysql_query("SELECT camp0, titulo, resumen, foto, fuente_foto, link1, fecha, autor, email FROM peru_noti WHERE camp0 = '$pcamp0' order by camp0 DESC limit 0,15", $dbh);

$filas = mysql_num_rows($result);

if ($filas=="")

{

  $result1 = "Eventos en Lima";   

  $result2 = "Eventos en Lima, lugares de esparcimiento, paseos, cines, diversion, donde ir,actividades en Lima, guia de lugares de esparcimiento y locales de diversion.";   

}

Else

{

  $result1 = mysql_result($result, 0, 1 );   //0 es el row, 1 es el campo   

  $result2 = mysql_result($result, 0, 2 );   //0 es el row, 1 es el campo   

  $result3 = mysql_result($result, 0, 3 );   //0 es el row, 1 es el campo   

  $result4 = "http://www.netlima.com/peru/".$result3;   //0 es el row, 1 es el campo   

  $fechaor = mysql_result($result, 0, 6 );   //0 es el row, 1 es el campo   

}


?>

  <h1>Ahora estás en clientes.php</h1>
  <p>Nombre del cliente: <?php echo $id; ?></p>
  <p>Nombre del cliente: <?php echo $result1; ?></p>
  <p>Nombre del cliente: <?php echo $result2; ?></p>
</body>
</html>