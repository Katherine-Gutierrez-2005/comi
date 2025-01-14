<?php include("../template/Cabecera.php");?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtPrecio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../Confi/bd.php");

switch($accion){
    case "Agregar";
        $sentenciaSQL= $conexion->prepare("INSERT INTO platos (nombre,precio,descripcion,imagen ) VALUES (:nombre,:precio,:descripcion,:imagen);");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':precio',$txtPrecio);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){
            move_uploaded_file($tmpImagen,"../../Img/Platos/".$nombreArchivo);
        }
        
        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
        $sentenciaSQL->execute();
        header("Location:productos.php");
    break;
    case "Modificar";
        $sentenciaSQL= $conexion->prepare("UPDATE platos SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->execute();

        $sentenciaSQL= $conexion->prepare("UPDATE platos SET precio=:precio WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->bindParam(':precio',$txtPrecio);
        $sentenciaSQL->execute();

        $sentenciaSQL= $conexion->prepare("UPDATE platos SET descripcion=:descripcion WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
        $sentenciaSQL->execute();

        if($txtImagen!=""){
        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
        move_uploaded_file($tmpImagen,"../../Img/Platos/".$nombreArchivo);

        $sentenciaSQL= $conexion->prepare("SELECT imagen FROM platos WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $Plato=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($Plato["imagen"]) &&($Plato["imagen"]!="imagen.jpg")){
            if(file_exists("../../Img/Platos/".$Plato["imagen"])){
                unlink("../../Img/Platos/".$Plato["imagen"]);
            }
        }
        
        $sentenciaSQL= $conexion->prepare("UPDATE platos SET imagen=:imagen WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
        $sentenciaSQL->execute();
        }
        header("Location:productos.php");
    break;
    case "Cancelar";
        header("Location:productos.php");
    break;
    case "Seleccionar";
        $sentenciaSQL= $conexion->prepare("SELECT * FROM platos WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $Plato=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre=$Plato['nombre'];
        $txtDescripcion=$Plato['descripcion'];
        $txtPrecio=$Plato['precio'];
        $txtImagen=$Plato['imagen'];
    break;
    case "Borrar";
        $sentenciaSQL= $conexion->prepare("SELECT imagen FROM platos WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $Plato=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($Plato["imagen"]) &&($Plato["imagen"]!="imagen.jpg")){
            if(file_exists("../../Img/Platos/".$Plato["imagen"])){
                unlink("../../Img/Platos/".$Plato["imagen"]);
            }
        }
        $sentenciaSQL= $conexion->prepare("DELETE FROM platos WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        header("Location:productos.php");
    break;
}
$sentenciaSQL= $conexion->prepare("SELECT * FROM platos");
$sentenciaSQL->execute();
$listaPlatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="col-md-4">

   <div class="card">
    <div class="card-header">
        Datos del plato
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" >
        <div class = "form-group">
            <label for="txtID">ID</label>
            <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
        </div>
        <form>
        <div class = "form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del plato">
        </div>
        <div class = "form-group">
            <label for="txtPrecio">Precio</label>
            <input type="text" required class="form-control" value="<?php echo $txtPrecio; ?>" name="txtPrecio" id="txtPrecio" placeholder="Precio del plato">
        </div>
        <div class = "form-group">
            <label for="txtDescripcion">Descripción</label>
            <input type="text" required class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripción del plato">
        </div>
        <div class = "form-group">
            <label for="txtNombre">Imagen</label>
            <br/>
            <?php if($txtImagen!=""){ ?>
                <img class="img-thumbnail rounded" src="../../Img/Platos/<?php echo $txtImagen; ?>" width="100" height="100" alt="" srcset=""> 
            <?php  }    ?>
            <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del plato">
        </div>
        <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>
        </form>
    </div>
   </div>   
</div>

<div class="col-md-8">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listaPlatos as $Plato) { ?>
            <tr>
                <td><?php echo $Plato['id']; ?></td>
                <td><?php echo $Plato['nombre']; ?></td>
                <td>$<?php echo $Plato['precio']; ?></td>
                <td><?php echo $Plato['descripcion']; ?></td>
                <td> <img class="img-thumbnail rounded" src="../../Img/Platos/<?php echo $Plato['imagen']; ?>" width="100" height="100" alt="" srcset=""> </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $Plato['id']; ?>"/>
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
                    </form>
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<?php include("../template/Pie.php");?>