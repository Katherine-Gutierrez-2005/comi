<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img\logo un granito.svg">
  <link rel="stylesheet" href="stylesP.css">
  <link rel="stylesheet" href="indexP.css">
  <link rel="stylesheet" href="estilos.css">
  
  <title>Un granito por el campo</title>
</head>
<body>
  <header>
    <a href="#" class="logo">
        <img src="img\un Granito logo.PNG" alt="logo de la pagina" class="logo-img">
        <h1 class="logo-nombre">Un granito por el campo</h1>
    </a>
    <nav>
        <a href="indexP.html">inicio</a>
        <a href="productosPp.php">Productos</a>
        <a href="nosotrosP.html">nosotros</a>
        <a href="blogP.html">blog</a>
        <a href="crea tu cuentaP.php">Inicia sesion</a>
    </nav>

  </header>
    <section class="form-main">
    
    <form method="post" enctype="multipart/form-data">
  
        <div class="form-content">
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          <div class="circle-3"></div>
          <div class="box">
         <h3>Crea una cuenta en Un granito por el campo</h3>
        <label for=""> Nombre</label> </br>
        <input type="text" placeholder="ingrese su nombre completo" name="nombre" class="input-control" ></br>
        <label for=""> Email</label></br>
        <input type="email" placeholder="ingrese su email" name="email" class="input-control" ></br>
        <label for=""> usuario</label></br>
        <input type="text" placeholder="ingrese un usuario" name="usuario" class="input-control" ></br>      
        <label for=""> contraseña</label></br>
        <input type="password" placeholder="ingrese una contraseña" name="password" class="input-control" ></br>
        
        <button type="submit" name="registrarse"id="registrarse" class="btn btn-primary width-100">Registrarse</button>


    </form>
    <?php
    include("registrar.php");
    ?>
            <p>¿Ya tienes una cuenta? <a href="crea tu cuentaP.php" class="gradient-text">Iniciar Sesión</a></p>
          </div>
        </div>
      </section>
      <footer>
        <div class="contenedor-footer">
          <div class="content-foo">
            <p><a href="#" class="logo">
                <img src="img\logo un granito (2).png" alt="logo de la pagina" class="logo">
         </a></p>
  
  
          </div>
          <div class="content-foo">
            <h4>Email</h4>
            <p>Ungranitoporelcampo2022@gmail.com</p>
          </div>
          <div class="content-foo">
            <h4>Contactanos</h4>
            <div class="footer-social">
        
             </a>
              <a href="https://www.instagram.com/Ungranitoporelcampo2022/" class="icon icon-instagram" target="_blank"> <img src="img\instagram.svg"> <svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg> 
              </a>
              <a href="https://mail.google.com/mail/u/3/#inbox"class="icon icon-mail4" target="_blank"><img src="img\mail4.svg"> <svg class="icon icon-mail4"><use xlink:href="#icon-mail4"></use></svg>
              </a>
              <a href="https://wa.me/573054199122"class="icon icon-whatsapp" target="_blank"> <img src="img\whatsapp.svg"> <svg class="icon icon-whatsapp"><use xlink:href="#icon-whatsapp"></use></svg>
              </a>
          
            </div>
            
          </div>
        </div>
        <div class="titulo-final">
          <small> &copy; 2022 <b> Un granito por el campo</b> - Todos los Derechos Reservdos.</small>
        </div>
      </footer>
   
    
 
</body>
</html>