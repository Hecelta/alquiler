<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$a=$_POST['gara'];
		
?>

<form action="cod_ing_inquilino.php" method="Post">
    <p>
    Codigo	 : <input type="text" name="cod" ><br/>    
    Nombre: <input type="text" name="nom" ><br/>
    dni : <input type="text" name="dni" ><br/>
    correo : <input type="text" name="cor" ><br/>
    celular : <input type="text" name="cel" ><br/>
    garante : <input type="text" name="gar" readonly="readonly" value="<?php echo $a;?>" ><br/>
     
    <br/>
    <input type="submit" value="Guardar datos" title="Grabar en base de datos de mysql">
    <input type="reset">
    
    </p>

</form>

</body>
</html>
