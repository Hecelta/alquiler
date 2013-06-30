<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form name="formea" method="post" action="form_ing_alquiler2.php" >

<?php
////////CONECTA LA BASE DE DATOS
$conexion = mysql_connect('localhost','root',"mysql");
mysql_select_db('alquiler_casas');
///// MUESTRA LISTA DE INMUBLES
$result=mysql_query("SELECT codinm,ubicacion FROM inmueble ORDER BY ubicacion");
if ($row = mysql_fetch_array($result))
		{ echo '<select name="inmueble">';
		do { 
			echo '<option value="'.$row["codinm"].'">'.$row["ubicacion"].'</option>';
			} while ($row = mysql_fetch_array($result)); 
		echo '</select>';
		}
	echo "</br>";
	
/////MUESTRA LISTA DE INQUILINOS
$result=mysql_query("SELECT codin,nombres FROM inquilino ORDER BY nombres");
if ($row = mysql_fetch_array($result))
		{ echo '<select name="inqui">';
		do { 
			echo '<option value="'.$row["codin"].'">'.$row["nombres"].'</option>';
			} while ($row = mysql_fetch_array($result)); 
		echo '</select>';
		}	
	
		
?>

<input name="Continuar" type="Submit" value="Siguiente" />


</form>

</body>
</html>
