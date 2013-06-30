<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body bgcolor="#CCCCFF">

<?php
$a=$_POST['cod'];
$b=$_POST['ubi'];
$c=$_POST['tip'];
$d=$_POST['cor'];
$e=$_POST['are'];
$f=$_POST['nro'];
$g=$_POST['pre'];
$h=$_POST['gar'];

$conecta=@mysql_connect('localhost','root',"mysql");
$db_selected=mysql_select_db("alquiler_casas",$conecta);		  
$cadena="INSERT INTO inmueble(codinm,ubicacion,tipo,area,nro_habitaciones,precio_mes,garantia)"."VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
$resultset=@mysql_query($cadena,$conecta);


?>

</body>
</html>
