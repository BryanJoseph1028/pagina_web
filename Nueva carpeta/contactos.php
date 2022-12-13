<?php
    include("config.php");
  ?>

<!DOCTYPE html>
<html>
  <head> 
	 <title>Contáctanos | Sistemas S.A </title>
    <link rel="shortcut icon" href="img/s.png" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <script src="js/jquery-3.1.0.min.js" ></script>
    <script src="js/main.js" ></script>
    <link rel="icono" href="img/logo.png">
  </head>

  <body>
  <header>
    <div class="contenedorn">
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="trabajo.html">Nuestro Trabajo</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
        <li><a href="contactos.html">Contáctanos</a></li>
      </ul>
    </nav>
    </div>
  </header>
        <div class="slideshow">
      <ul class="slider">
        <li>
          <img src="img/1.jpg" alt="">
          <section class="caption">
            <h1>Contáctanos</h1>
            <p>Tu opinión es muty importante para nosotros!!</p>
          </section>
        </li>
        <li>
          <img src="img/2.jpg" alt="">
          <section class="caption">
            <h1>Contáctanos</h1>
            <p>Tu opinión es muy importante para nosotros!!</p>
          </section>
        </li>
        <li>
          <img src="img/3.jpg" alt="">
          <section class="caption">
            <h1>Contáctanos</h1>
            <p>Tu opinión es muy importante para nosotros!!</p>
          </section>
        </li>
        <li>
          <img src="img/4.jpg" alt="">
          <section class="caption">
            <h1>Contáctanos</h1>
            <p>Tu opinión es muy importante para nosotros!!</p>
          </section>
        </li>
      </ul>
      <ol class="pagination">
      </ol>
    </div>
    <br>
    <br>
    <br>
    <br>

    </div>
   
  
  <div id="general">

  <section id="bienvenido"></section> 
  <br><center><h2>Contactanos</h2></center><br><br>
  <center><h3>Por medio de:</h3></center>
  <center><p><br> sistemas19@gmail.com</p></center>
  <center><p><br> facebook.com/sistemassaguate</p></center>
  <center><p><br> instagram.com/sistemassaguate</p></center>

  

  <section id="blog">
    <br><br><br><strong><h3>Galeria 2</h3></strong>
    <div class="contenedorr">
      <article>
        <img src="img/mm.jpg" alt="">
        <h4>Realizamos paginas web a tu gusto</h4>
      </article>
      <article>
        <img src="img/qq.jpg" alt="">
        <h4>Maxima calidad en nuestro trabajo</h4>
      </article>
      <article>
        <img src="img/jj.jpg" alt="">
        <h4>Tenemos el mejor equipo de trabajo</h4>
      </article>
    </div>
  </section>

  <section id="info">
    <h3>Escribenos aqui abajo...</h3>
  

  <div class="contenedor">
    <div class="info-tech">
      <img src="img/1.1.jpg" width="250" height="250">
      <h4>Ejemplo 1</h4>
    </div>

    <div class="info-tech">
      <img src="img/1.2.jpg" width="250" height="250">
      <h4>Ejemplo 2</h4>
    </div>

    <div class="info-tech">
      <img src="img/1.3.jpg" width="250" height="250">
      <h4>Ejemplo 3</h4>
    </div>
  </div>
  </section>
  <br>
</div>
  
   
  <div id="form">
  <?php
  $consulta1 = mysqli_query($conexion, "SELECT * FROM comentario") or die (mysqli_error($conexion));
  while ($row = mysqli_fetch_assoc($consulta1)) {
      echo "<div class='comentario'>".$row['usuario']."<br><br>
      ".$row['comentario']."

      </div>";
  }
  ?> 

  <center><form action="" method="POST">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="text" name="comentario" placeholder="comentario">
    <input type="submit" name="enviar" value="Enviar Comentario">
  </form></center>

  <?php
    if (isset($_POST['enviar'])) {
      $usuario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['usuario']));
      $comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));
      if ($usuario =='' or $comentario =="") {
        echo "lo sentimos, no puede dejar los campos vacios";
      }
      else{
        $insertar = mysqli_query($conexion, "INSERT INTO comentario(usuario, comentario) VALUES ('".$usuario."', '".$comentario."')")or die(mysqli_error($conexion));
        echo "El comentario se ha enviado";
      }
    }
  ?>
</div>

   <footer>
      <div class="contenedor">
        <p class="copy">Sistema S.A &copy; 2019</p>
        <div class="sociales">
          <a class="icon-googleplus" href="google.com"></a>
        </div>
      </div>
 </div>
    </footer> 
  </body>
</html>