<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form name="formea" method="post" action="form_ing_inquilino2.php" >

<?php

$conexion = mysql_connect('localhost','root',"mysql");
mysql_select_db('alquiler_casas');

$result=mysql_query("SELECT codgar,nombres FROM garante ORDER BY nombres");
if ($row = mysql_fetch_array($result))
		{ echo '<select name="gara">';
		do { 
			echo '<option value="'.$row["codgar"].'">'.$row["nombres"].'</option>';
			} while ($row = mysql_fetch_array($result)); 
		echo '</select>';
		}
		
?>

<input name="Continuar" type="Submit" value="Siguiente" />


</form>

</body>
</html>
