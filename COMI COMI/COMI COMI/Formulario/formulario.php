<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Formulario</title>
</head>
<body>
	<?php
 <section class="form-register">
 	<form action="guardar.php" method="POST">
 	<h4>Formulario</h4>
 	<input class="controls" type="text" name="Nombres" placeholder="Ingrese su nombre">
 	<input class="controls" type="text" name="Apellidos" placeholder="Ingrese su Apellidos">
 	<input class="controls"type= "text" name="Correo" placeholder="Ingrese su Correo">
 	<input class="controls" type="text" name="contraseña" placeholder="Ingrese su contraseña">
 	<p>Estoy de acuerdo <a href="#">con terminos y condiciones</p>
 		<input class="botons" type="submit" value="registrar">
        <p> <a href="#"> ¿ya tengo cuenta?</a></p>
 		 </section>
</body>
</html>