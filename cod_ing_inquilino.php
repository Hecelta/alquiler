<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body bgcolor="#CCCCFF">

<?php
	$a=$_POST['cod'];
	$b=$_POST['nom'];
	$c=$_POST['dni'];
	$d=$_POST['cor'];
	$e=$_POST['cel'];
	$f=$_POST['gar'];
	
$conecta=@mysql_connect('localhost','root',"mysql");
$db_selected=mysql_select_db("alquiler_casas",$conecta);		  
$cadena="INSERT INTO inquilino(codin,nombres,dni,correo,celular,codgara)"."VALUES('$a','$b','$c','$d','$e','$f')";
$resultset=@mysql_query($cadena,$conecta);

echo "<script type='text/javascript'>document.location.href = 'lista_inquilino.php';</script>";

?>

</body>
</html>
