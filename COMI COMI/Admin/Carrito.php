<?php 
session_start();

$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
            if (is_numeric($_POST['id'])) {
                $id=($_POST['id']);
                $mensaje.="OK ID correcto".$id."</br>";
            }else{
                $mensaje.="Upss... ID incorrecto".$id."</br>";
            }
            if (is_string($_POST['nombre'])) {
                $nombre=($_POST['nombre']);
                $mensaje.="OK nombre correcto".$nombre."</br>";
            }else{
                $mensaje="Upss... nombre incorrecto"."</br>"; 
            break;}
            if (is_string($_POST['descripcion'])) {
                $descripcion=($_POST['descripcion']);
                $mensaje.="OK descripcion correcta".$descripcion."</br>";
            }else{
                $mensaje.="Upss... descripcion incorrecto"."</br>"; 
            break;}
            if (is_numeric($_POST['cantidad'])) {
                $Cantidad=($_POST['cantidad']);
                $mensaje.="OK cantidad correcta".$Cantidad."</br>";
            }else{
                $mensaje.="Upss... cantidad incorrecto"."</br>"; 
            break;}
            if (is_numeric($_POST['precio'])) {
                $precio=($_POST['precio']);
                $mensaje.="OK precio correcto".$precio."</br>";
            }else{
                $mensaje.="Upss... precio incorrecto"."</br>"; 
            break;}

            if(!isset($_SESSION['Carrito'])){
                $producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'descripcion'=>$descripcion,
                    'cantidad'=>$Cantidad,
                    'precio'=>$precio
                );
                $_SESSION['Carrito'][0]=$producto;
                $mensaje="Producto agregado a carrito";
            }else{
                $idProductos=array_column($_SESSION['Carrito'],"id");
                if (in_array($id,$idProductos)){
                    echo "<script>alert('El producto ya ha sido seleccionado...');</script>";
                    $mensaje="";
                }else{
                $NumeroProductos=count($_SESSION['Carrito']);
                $producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'descripcion'=>$descripcion,
                    'cantidad'=>$Cantidad,
                    'precio'=>$precio
                );
                $_SESSION['Carrito'][$NumeroProductos]=$producto;
                $mensaje="Producto agregado a carrito";
                }
            }
            //$mensaje= print_r($_SESSION,true);//
        break;
        case "Eliminar":
            if (is_numeric($_POST['id'])){
                $id=($_POST['id']);
                foreach($_SESSION['Carrito'] as $indice=>$producto){
                    if($producto['id']==$id){
                        unset($_SESSION['Carrito'][$indice]);
                        echo "<script>alert('Elemento borrado...');</script>";
                    }
                }
            }else{
                $mensaje.="Upss... ID incorrecto".$id."</br>";
            }
        break;
    }
}
?>