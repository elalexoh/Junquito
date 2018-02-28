<?php include(HEADER_LOGIN .'public/header_login.html'); ?>

<body>
    
  <div class="section"></div>
  <main>
    <center>
      <!--Aqui esta la imagen en formato gif!-->
      <!--<img class="responsive-img" style="width: 250px;" src="" />-->
      <div class="section"></div>

      <h5 class="saludologin">¡Bienvenido al Sistema de Control y Gestión de Historias Médicas!</h5>
      <h6 class="saludologin">Del Hospital Municipal "El Junquito"</h6>
      <div class="section"></div>
        <div class="container">
        <!--<div class="row">
            <div id="animate-area" class="col s4"></div>!-->
            
                <div class="z-depth-1 grey lighten-4 col s4" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                  <!--aqui estoy haciendo una prueba solamente de ver si el form esta funcionando
                  la idea aqui es que el form envie los datos al controlador y que este haga conexion a la base de datos
                  quie hara la respectiva consulta de ver si el usuario y contraseña ingresados son validos para el acceso al sistema!-->
                  <?php include(HTML_CORE .'overall/login.php'); ?>
                </div>
            <!--<div id="animate-area" class="col s4"></div>!-->
        </div>
      <a class='linkslogin' href="?view=vistas&action=recupPassword"><b>¡Recupera tu Contraseña!</b></a> ||
      <a class='linkslogin' href="?view=vistas&action=nuevoUsuario"><b>¿No estas registrado?</b></a>
<br />
    </center>
<br />    
<?php include(BANNER_CORE . 'public/bannerPrincipal.html'); ?>
    <!--<div class="section"></div>
    <div class="section"></div>!-->
<br />
<div class="desarrolladores">Desarrollado por: Wendy R. Cristofer U. Aitor U. Gabriel M. & Frederick G. Estudiantes del Colegio Universitario Francisco de Miranda</div>
  </main>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>