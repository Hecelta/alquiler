<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body bgcolor="#CCCCFF">
<h2> DATOS REGISTRADOS</h2>
<table border="1">
<tr>
    <td>Codigo</td>
    <td>Nombres</td>
    <td>Direccion del garante</td>    
	<td>Telefonos </td>
	<td>Correo </td>    
</tr>
<?php
$conexion = mysql_connect('localhost','root',"mysql");
mysql_select_db('alquiler_casas');
$tabla = mysql_query("SELECT * FROM garante");
while ($registro = mysql_fetch_array($tabla)) 
{
?>
  <tr>
    <td><?php echo $registro['codgar']; ?></td>
    <td><?php echo $registro['nombres']; ?></td>    
    <td><?php echo $registro['direccion']; ?></td>
	<td><?php echo $registro['telefono']; ?></td>
    <td><?php echo $registro['correo']; ?></td>
  </tr>
<?php
}
mysql_free_result($tabla);
mysql_close($conexion);
?>
</table>

<p><a href="form_ing_garante.php">inicio</a></p>
</body>
</html>
