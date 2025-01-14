<?php
$conexion = mysqli_connect("localhost", "root", "", "comi");
mysli_set_charset($conexion, "utf8");
if($connecta->connect_error){
   die("Error al conectar la base de datos de la pagina".$connecta->connect_error)

VALUES(null, '".$_POST["Correo"]."'-'".$_POST["Correo"]."')";
$resultado = mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

?>