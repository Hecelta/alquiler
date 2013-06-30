<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$a=$_POST['inmueble'];
$b=$_POST['inqui'];
		
?>

<form action="cod_ing_alquiler.php" method="Post">
    <p>
    Codigo	 : <input type="text" name="cod" ><br/>    
    Fecha de contrato: <input type="text" name="fc" ><br/>
    Fecha de inicio: <input type="text" name="fi" ><br/>
    Fecha de fin : <input type="text" name="ff" ><br/>
    Tiempo : <input type="text" name="ti" ><br/>
    Precio por mes : <input type="text" name="pm" ><br/>
    
    INMUEBLE : <input type="text" name="inmu" readonly="readonly" value="<?php echo $a;?>" ><br/>
    INQUILINO : <input type="text" name="inqu" readonly="readonly" value="<?php echo $b;?>" ><br/>
    <br/>
    <input type="submit" value="Guardar datos" title="Grabar en base de datos de mysql">
    <input type="reset">
    
    </p>

</form>

</body>
</html>
