<?php include("Template/cabecera.php"); ?>

<?php 
include("Administrador/Confi/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM platos");
$sentenciaSQL->execute();
$listaPlatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaPlatos as $Plato) { ?>
    <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" heigth="260px"" src="Img/Platos/<?php echo $Plato['imagen']; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $Plato['nombre']; ?></h4>
                    <p class="card-text"><?php echo $Plato['precio']; ?></p>
                    <p class="card-text"><?php echo $Plato['descripcion']; ?></p>
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $Plato['id']; ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo $Plato['nombre']; ?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo $Plato['precio']; ?>">
                        <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $Plato['descripcion']; ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1;?>">
                    <button name="btnAccion" value="Agregar" class="btn btn-primary" href="#" type="submit">Añadir al carrito</button>
                    </form>
                </div>
            </div>
    </div>
<?php } ?>

<?php include("Template/pie.php"); ?>

