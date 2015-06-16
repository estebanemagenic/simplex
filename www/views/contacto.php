<!doctype html>
<html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400' rel='stylesheet' type='text/css'>
<link  rel= "stylesheet"  href= "css/bootstrap.min.css" >
<link  rel= "stylesheet"  href= "css/estilo.css" >
</head>

<body>

<!-- inicio del navegador -->
    <nav class="navbar navbar-default navbar-static-top nav-global">
      <div class="container navegador">
        <div class="navbar-header navegador_in">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo_nav" href="#"><img src="imagenes/marca.png" alt="not1"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="quienes-somos.html">Quienes somos</a></li>
            <li><a href="proyectos.html">Proyectos desarrollados</a></li>
            <li><a href="noticias.html">Noticias</a></li>
            <li class="active"><a href="contacto.html">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- final del navegador -->

<!-- inicio del slider -->

<div class="banner_qs">
  <div class="text-center container">
    <div class="d_bannerqs hidden-xs hidden-sm hidden-md hidden-lg">
      <h1>Nuestro equipo de trabajo</h1>
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
    </div>
    <figure>
      <img src="imagenes/qs/banner_qs.jpg" alt="not1">
    </figure>
  </div>
</div>

  <!-- fin del slider -->

<div class="cont_simp">
  <div class="container">

    <div class="contactanos">
      <div class="container">
        <div class="text-center titulo">
          <h1>CONTACTO</h1>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
        </div>
      </div> 
    </div> 

      <form action="contacto.php" method="post" onsubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">

          <div class="col-xs-12">
            <input name="Nombre" type="text" class="input col-xs-12" id="Nombre" placeholder="Nombre">
          </div>
          <div class="col-xs-12">
            <input name="Telefono" type="text" class="input col-xs-12" id="Telefono" placeholder="Telefono">
          </div>
          <div class="col-xs-12">
            <input name="Mail" type="text" class="input col-xs-12" id="Mail" placeholder="E-mail">
          </div>
          <div class="col-xs-12">
            <textarea name="Mensaje" id="consulta" class="mensaje col-xs-12" placeholder="Mensaje"></textarea>
          </div>
                
          <div class="cont-enviar col-xs-12">
           <input class="enviar col-xs-12" name="Enviar" type="submit" value="ENVIAR">
          </div>
      </form>
        
  </div>
</div>

<!-- final formulario -->

<div class="text-center container col-xs-12 direccion">
    <div class="info">
      <h2 class="hidden-xs">Accede a nuestros proyectos</h2>
      <figure class="avion">
        <a href="proyectos.html"><img src="imagenes/index/icono_pro.png" alt="not2"></a>  
      </figure>
    </div>
    <figure class="foto_f">
      <img src="imagenes/index/direccion.jpg" alt="not2">
    </figure>
</div>

<footer class="row p_pagina text-center col-xs-12">
  <div class=" container">
    <div class="datos container">
      <h3>Redes sociales</h3>
      <figure>
        <img src="imagenes/index/i_facebook.jpg" alt="not2">
        <img src="imagenes/index/i_twitter.jpg" alt="not2"> 
      </figure>
      <p>Todos los derechos reservados a “SIMPLEX INGENIERIA”<br>
        Correo: contacto@simplex.cl - Fono: +56 9 1234 8765<br>
        Dirección: Avda. Lorem Ipsum Nº 1234 Rancagua
      </p>
    </div>

    <div class="text-center pie col-xs-12">
      <div class="container"> 
        <div class="marca col-xs-12 col-md-6 col-sm-6">
          <a href="#"><img src="imagenes/marca.png" alt="not1"></a>
        </div>
        <div class="detalle col-xs-12 col-md-6 col-sm-6">
          <p>Sitio web desarrollado por emagenic Ltda
          </p>
        </div>
    </div>
    </div>
  </div>
</footer>


<script src="js/jquery.js"></script>
<script src = "js/bootstrap.min.js" > </script>
</body>

</html>
