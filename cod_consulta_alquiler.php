<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {color: #0000FF; font-weight: bold; }
-->
</style>
</head>

<body>
<table border="1">
<tr bgcolor="#FF6600">
    <td width="180"><span class="Estilo3">nombres</span></td>
	<td width="50"><span class="Estilo3">dni inquilino</span></td>
    <td width="100"><span class="Estilo3">fecha de contrato</span></td>
    <td width="100"><span class="Estilo3">fecha inicio</span></td>
	<td width="100"><span class="Estilo3">Precio por mes</span></td>
    <td width="200"><span class="Estilo3">Ubicacion de inmueble</span></td>
    <td width="100"><span class="Estilo3">Tipo de inmueble</span></td>
    
  </tr>
<?php  
$cod=$_POST["codigo"];

$conecta=@mysql_connect('localhost','root',"mysql");
$db_selected=mysql_select_db("alquiler_casas",$conecta);

$tabla = mysql_query("SELECT inquilino.nombres, inquilino.dni, alquiler.fecha_contrato, alquiler.fecha_inicio, alquiler.fecha_fin, alquiler.preciomes, inmueble.ubicacion, inmueble.tipo, inmueble.area FROM inquilino  INNER JOIN alquiler ON inquilino.codin=alquiler.codinquilino INNER JOIN inmueble ON alquiler.codinmueble=inmueble.codinm WHERE inquilino.codin='$cod'");

while ($registro = mysql_fetch_array($tabla)) 
{
?>
 <tr>
    <td><?php echo $registro['nombres']; ?></td>
	<td><?php echo $registro['dni']; ?></td>
    <td><?php echo $registro['fecha_contrato']; ?></td>
	<td><?php echo $registro['fecha_inicio']; ?></td>
   	<td><?php echo $registro['preciomes']; ?></td>
    <td><?php echo $registro['ubicacion']; ?></td> 
    <td><?php echo $registro['tipo']; ?></td> 
  </tr>
  <?php
}
mysql_free_result($tabla);

?>
</table>
<div align="center"><a href="form_consulta_alquiler.php">Volver atras</a>
</body>
</html>
