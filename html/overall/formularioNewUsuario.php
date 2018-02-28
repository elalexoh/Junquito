<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<!--banner del ministerio, hay que acomodar ya que baja el cuadro del formulario

<img src="preview/banner2.png" class="img-responsive" alt="">
<img src="preview/logo.png" class="logohospital"></img>!-->
<?php include(BANNER_CORE . 'public/bannerPrincipal.html'); ?>


  <div class="section col s6"></div>
  <main>
    <center>
      <!--Aqui esta la imagen en formato gif!-->

      <h5 class="saludologin">Registro de Nuevo Usuario</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <!--aqui estoy haciendo una prueba solamente de ver si el form esta funcionando
          la idea aqui es que el form envie los datos al controlador y que este haga conexion a la base de datos
          quie hara la respectiva consulta de ver si el usuario y contraseña ingresados son validos para el acceso al sistema!-->
            <div id="ok"></div>
            <div id="newUsuMsj"></div>
            <form name="frUser" class="col s12" method="POST" action="?view=models&action=registrarUsuario" id="newUsuForm" >
            <img src="view/img/newuser.svg" class="loginimg"></img>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s6'>
                <input id='usuario' class='validate' type='text' name='frusuario' title="Nombre de Usuario" onpaste="return false" />
                <label id="lusuario" for='frusuario' title="Nombre de Usuario">Escriba Nombre de Usuario</label>
                <div class="" id="ntUsuario"></div>
              </div>
              <div class='input-field col s6'>
                <input id="correo" class='validate' type='email' name='email' title="Correo Electrónico" onpaste="return false" />
                <label for='email' title="Correo Electrónico">Escriba su Correo</label>
                <div class="" id="ntCorreo"></div>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s6'>
                <input class='validate' type='password' name='newPassword' id='newPassword' title="Contraseña o Password" onpaste="return false" />
                <label for='password' title="Contraseña o Password">Escriba su Contraseña</label>
              <div id="ntPass"></div>
              </div>
              <div class='input-field col s6'>
                <input class='validate' type='password' name='cpassword' title="Repetir la Contraseña o Password" id='cpassword' />
                <label for='cpassword' title="Repetir Contraseña o Password">Repetir Contraseña</label>
                <!--<i>seguridad:</i><input name="seguridad" type="text" style="border: 0px; background-color:ffffff; text-decoration:italic;" onfocus="blur()">!-->
                <div class="" id="ntcPassword"></div>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s6'>
  			        <select id="pregSecreta" class="browser-default col s12 m12 l12" name="presecreta" title="Escoja una Pregunta">
  			           <option value="empty" selected>Pregunta secreta</option>
    			       <option value="1">¿Cual es segundo nombre de su madre?</option>
  			           <option value="2">¿Cual es el nombre de tu mejor amigo de la escuela?</option>
  			           <option value="3">¿Cual es el nombre del personaje principal de su pelicula favorita?</option>
  			       </select>
               <div class="" id="ntPreSecreta"></div>
              </div>
              <div class='input-field col s6'>
                <input id="rsecreta" class='validate' type='password' name='ressecreta' title="Respuesta Secreta" onpaste="return false" />
                <label for='ressecreta' title="Respuesta Secreta">Respuesta Secreta</label>
                <div class="" id="ntRsp"></div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12 l12">
  				<select id="rolUsu" class="browser-default col s12 m12 l12" name="rol_usu">
  			       <option value="empty" selected>Escoja el rol de Usuario</option>
    			   <option value="1" disabled>Administrador</option>
  			       <option value="2">Doctor (a)</option>
  			       <option value="3">Asistente/Enfemera</option>
  			       <option value="4">Personal Archivo Central</option>
  			    </select>
            <div class="" id="ntRol"></div>
			</div>
            </div>
            <br />
            <center>
              <div class='row'>
                <div class="col s6">
                <input type="hidden" name="ajax">
                  <button type='submit' id='newUsuBtn' class='btn btn-medium waves-effect indigo' onclick="">Registrar</button><!--confUsuario();!-->
                </div>
                <div class="col s6">
                  <a type='reset' class='btn btn-medium waves-effect grey darken-3' onclick="confirmarSalida();">Cancelar</a><!--!-->
                </div>
              </div>
            </center>
          </form>
        </div>
      </div>
      <div id="valor"></div>
      <!--<a class='linkslogin' href="?view=vistas&action=actualizaPassword"><b>¡Actualiza tu Contraseña!</b></a>!-->
    <div class="desarrolladores">Desarrollado por: Wendy R. Cristofer U. Aitor U. Gabriel M. & Frederick G. Estudiantes del Colegio Universitario Francisco de Miranda</div>
    </center>
  </main>
  
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>