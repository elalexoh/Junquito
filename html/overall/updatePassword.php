<?php include(HEADER_LOGIN .'public/header_login.html'); ?>

  <div class="section"></div>
  <main>
    <center>
      <!--Aqui esta la imagen en formato gif!-->
      <!--<img class="responsive-img" style="width: 250px;" src="" />-->
      <div class="section"></div>

      <h5 class="saludologin">Actualiza tu Contraseña</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <!--aqui estoy haciendo una prueba solamente de ver si el form esta funcionando
          la idea aqui es que el form envie los datos al controlador y que este haga conexion a la base de datos
          quie hara la respectiva consulta de ver si el usuario y contraseña ingresados son validos para el acceso al sistema!-->
            <form name="formPass" class="col s12" method="POST" action="?view=models&action=cambioPass" autocomplete="off">
            <img src="preview/usu.png" class="loginimg"></img>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s14'>
                <input class='validate' type='password' name='fconfpass' id="conf" />
                <label id="lconf" for='fconfpass'>Escribe Nueva Contraseña</label>
              </div>
            </div>
            <div class='row'>
             <div class='input-field col s14'>
               <input class='validate' type='password' name='fcrepass' id='fresp' />
               <label for='fcrepass'>Repite la Contraseña</label>
              </div>
            <br />
            <center>
              <div class='row'>
                <div class="col s12">
                  <button type='button' id='btn_login' class='btn btn-medium waves-effect indigo' onclick="actualizaPass();">Actualizar</button>
                </div>
              </div>
            </center>
          </form>
        </div>
      </div>
      <div id="valor"></div>
      <!--<a class='linkslogin' href="index.php"><b>¿Ya posee una Cuenta?</b></a>!-->
      <br><br>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>