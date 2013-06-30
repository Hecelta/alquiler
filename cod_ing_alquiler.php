<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body bgcolor="#CCCCFF">

<?php
	$a=$_POST['cod'];
	$b=$_POST['fc'];
	$c=$_POST['fi'];
	$d=$_POST['ff'];
	$e=$_POST['ti'];
	$f=$_POST['inmu'];
	$g=$_POST['inqu'];
	$h=$_POST['pm'];
	
$conecta=@mysql_connect('localhost','root',"mysql");
$db_selected=mysql_select_db("alquiler_casas",$conecta);	
	  
$cadena="INSERT INTO alquiler(codal,fecha_contrato,fecha_inicio,fecha_fin,tiempo,codinmueble,codinquilino,preciomes)"."VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
$resultset=@mysql_query($cadena,$conecta);

echo "<script type='text/javascript'>document.location.href = 'lista_alquiler.php';</script>";

?>

</body>
</html>
