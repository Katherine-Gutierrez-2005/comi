<?php 

    $nombre=$_GET['Nombre'];
    $usuario=$_GET['Usuario'];   
    $email=$_GET['Email'];
    $password=$_GET['password'];
    $telefono=$_GET['Telefono']; 

    include("conexion.php");

    $sql="INSERT INTO usuarios(nombre,usuario,email,password,telefono) VALUES('$nombre','$usuario','$email','$password','$telefono')";
    $query=mysqli_query($conexion,$sql);
    if($query){
        header('refresh:0;url=contactos.php?insertado');
    }

?>