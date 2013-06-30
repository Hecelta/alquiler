<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table border="0" align="center">
  <tr>
    <td>
	<h3 align="center">CONSULTA DE ALQUILER</h3>
	<form action="cod_consulta_alquiler.php" method="post">
       
		Elija su nombre :        	           
        
        <?php
		$conecta=@mysql_connect('localhost','root',"mysql");
        $db_selected=mysql_select_db("alquiler_casas",$conecta);
		  		
			$result=mysql_query("SELECT codin,nombres FROM inquilino ORDER BY nombres");
			if ($row = mysql_fetch_array($result))
			{ echo '<select name="codigo">';
			 do { 
				  echo '<option value="'.$row["codin"].'">'.$row["nombres"].'</option>';
				} while ($row = mysql_fetch_array($result)); 
			echo '</select>';
			}
		?>
        
		<input name="submit" type="submit" value="Consultar" /></br>		                
	</form>
 	<a href="paginauno2.php">VOLVER ATRAS</a>
	</td>
   </tr>
</table>

</body>
</html>
