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
    <td>Codigo alquiler</td>
    <td>fecha contrato</td>
    <td>fecha inicio</td>    
	<td>fecha final </td>
	<td>tiempo </td>
   	<td>inmueble</td>     
   	<td>inquilino</td>     
   	<td>Precio por mes</td>             
        
</tr>
<?php
$conexion = mysql_connect('localhost','root',"mysql");
mysql_select_db('alquiler_casas');
$tabla = mysql_query("SELECT * FROM alquiler");
while ($registro = mysql_fetch_array($tabla)) 
{
?>
  <tr>
    <td><?php echo $registro['codal']; ?></td>
    <td><?php echo $registro['fecha_contrato']; ?></td>    
    <td><?php echo $registro['fecha_inicio']; ?></td>
	<td><?php echo $registro['fecha_fin']; ?></td>
    <td><?php echo $registro['tiempo']; ?></td>
    <td><?php echo $registro['codinmueble']; ?></td>
     <td><?php echo $registro['codinquilino']; ?></td>
    <td><?php echo $registro['preciomes']; ?></td>
  </tr>
<?php
}
mysql_free_result($tabla);
mysql_close($conexion);
?>
</table>

<p><a href="form_ing_alquiler1.php">inicio</a></p>
</body>
</html>
