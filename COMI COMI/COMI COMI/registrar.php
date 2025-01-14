<?php
include("../Confi/bd.php");

if (isset($_POST['registrarse'])) {
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password'])  >= 1) {
  $nombre = trim($_POST['nombre']);
  $email = trim($_POST['email']);
  $usuario = trim($_POST['usuario']);
  $password = trim($_POST['password']);
  
  $consulta = "INSERT INTO usuario1 (nombre, email, usuario ,password ) VALUES ('$nombre','$email','$usuario','$password')";
  $resultado=mysqli_query($con,$consulta);
  if ($resultado) {
    ?>
    <h3 class= "ok">¡te has registrado correctamente! </h3>
    <?php
  } else {
    ?>
    <h3 class= "bad">¡ups a ocurrido un error! </h3>
    <?php
  }

  }
}
?>