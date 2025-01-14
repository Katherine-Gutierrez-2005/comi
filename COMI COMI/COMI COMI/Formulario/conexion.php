<?php
session_start();
$Correo=$_POST['Correo'];
$Contraseña=sha1($_POST['Contraseña']);
$_session['Correo']=$Correo;
include("cn.php");
$consulta="SELECT*from ingresar
where Correo='$Correo'and 
Contraseña='$Contraseña'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_fetch_array($resultado);
if($filas){
    header("location:carta de comida.html");
}else{
    ?>
    <?php
    include("cn.php")
    ?>
    <h2>ERROR</h12>
    <?php

}
mysqli_free_result($resultado);
mysqlii_close($conexion);
?>
