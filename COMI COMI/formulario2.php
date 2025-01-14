<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Formulario</title>
</head>

<?php
$conectar=@mysql_connect('localhost','root','comi_comi') or die ("error de conexion");
if(!$conectar){
	echo "No se pudo conectar con el servidor";
}else{
	$base=mysql_select_db('prueba');
    if (!$Base) {
    	echo"No se encontro la base de datos";
    }
}
$nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];

$sql="INSERT INTO datos VALUES('$Nombre',
                                '$Apellidos',
                                '$Correo',
                                '$Contraseña')";
$ejecutar=mysql_query($sql);

if(!$ejecutar){
	echo"Hubo algun error";
}else{
	echo"Datos guardados correctamente <br><a href='formulario.html'>volver</a>";
}
?> 
</html>