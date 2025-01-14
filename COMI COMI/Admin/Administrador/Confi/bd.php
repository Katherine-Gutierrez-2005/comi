<?php
$host="localhost";
$bd="admin";
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
    
} catch ( Excepcion $ex) {
    echo $ex->getMessage();
}
?>